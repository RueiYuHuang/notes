require('dotenv').config();

const express = require('express')
const app = express()

const jwt = require('jsonwebtoken')

const cors = require('cors');
const corsOptions = {
  origin: ['http://localhost:3000'],
};
app.use(cors(corsOptions));

const port = process.env.SERVER_PORT;

// const posts = [
//     {
//         username: 'Ray',
//         title:'post 1'
//     },
//     {
//         username: 'Tom',
//         title:'post 2'
//     },
// ]


let authRouter = require('./routers/auth');
app.use('/api/auth', authRouter);

//認證使用者
function authenticateToken(req, res, next) {
    const authHeader = req.headers['authorization']
    //格式 Bearer Token
    //如果有 authHeader 才做分割，分割後取得陣列第[1]位置之Token
    //const token = req.header('Authorization').replace('Bearer ', '')
    const token = authHeader && authHeader.split(' ')[1]
    if(token == null) return res.sendStatus(401)

    // 解密驗證callback err & payload
    jwt.verify(token, process.env.ACCESS_TOKEN_SECRET, (err, user) => {
        //發生錯誤表示此token已失效或過期，回傳403需做refreshToken
        if(err) return res.sendStatus(403)
        console.log("user:",user);
        req.user = user
        next()
    })
    
}

app.get('/posts', authenticateToken, (req, res) => {
    res.json(posts.filter((data) => {
        return data.username === req.user.name
    }))
})


app.listen(port, () => {
    console.log(`server start at ${port}`)
});