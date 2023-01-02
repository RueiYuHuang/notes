let checkLogin = function (req, res, next) {
  // 判斷這個人是否已經登入？
  // session 裡如果沒有 member 這個資料，表示沒有登入過
  if (!req.session.member) {
    // 尚未登入
    return res.status(401).json({ message: '尚未登入' });
  }
  next();
};

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

module.exports = { checkLogin, authenticateToken };
