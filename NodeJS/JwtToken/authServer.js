require('dotenv').config();
const path = require('path');
const pool = require('./utils/db.js')

const express = require('express')
const app = express()

const jwt = require('jsonwebtoken')

app.use(express.json())

const port = process.env.AUTH_SERVER_PORT;

// 啟用 session
const expressSession = require('express-session');
// 把 session 存在硬碟中
var FileStore = require('session-file-store')(expressSession);
app.use(
    expressSession({
        store: new FileStore({
            // session 儲存的路徑
            path: path.join(__dirname, '..', 'sessions'),
        }),
        secret: process.env.SESSION_SECRET,
        // 如果 session 沒有改變的話，要不要重新儲存一次？
        resave: false,
        // 還沒初始化的，要不要存
        saveUninitialized: false,
    })
);

// 假裝此為資料庫
let refreshTokens = []

// 產生accessToken
function generateAccessToken(user) {
    return jwt.sign(user, process.env.ACCESS_TOKEN_SECRET, { expiresIn: '15s' })
}

//  登入
app.post('/login',(req, res) => {
    // TODO:驗證使用者
    const username = req.body.username
    const user = { name: username }
    // 產生accessToken跟refreshToken
    // base64(Header) + base64(Payload) + base64(Signature)
    // xxxxx.yyyyy.zzzzz
    const accessToken = generateAccessToken(user)
    const refreshToken = jwt.sign(user, process.env.REFRESH_TOKEN_SECRET)
    // refreshToken需存入資料庫
    refreshTokens.push(refreshToken)
    // 回傳Token
    res.json({ accessToken: accessToken, refreshToken: refreshToken })
})

// 刷新accessToken
app.post('/token', (req, res) => {
    const refreshToken = req.body.token
    if (refreshToken == null) return res.sendStatus(401)
    // 檢查資料庫是否有refreshToken
    if (!refreshTokens.includes(refreshToken)) return res.sendStatus(403)
    // 解密驗證callback err & payload
    jwt.verify(refreshToken, process.env.REFRESH_TOKEN_SECRET, (err, user) => {
        if (err) return res.sendStatus(403)
        //重新產生新的accessToken
        const accessToken = generateAccessToken({ name: user.name })
        res.json({ accessToken: accessToken })
    })
})

// 登出
app.delete('/logout', (req, res) => {
    // 清除資料庫上的refreshToken  
    refreshTokens = refreshTokens.filter(token => token !== req.body.token)
    res.sendStatus(204)
})

app.listen(port, () => {
    console.log(`server start at ${port}`)
});