const express = require('express')
const cors = require('cor')
const app = express()
app.use(cors())

app.get('/api', (req, res) => {
  res.status(200).json({api: 'version 1'})
})

app.get('/',(req,res)=>{
  res.send("Hello world")
})

app.get('/greeting',(req,res)=>{
  res.json({greeting:'Hello'})
})



app.listen(process.env.PORT ||3000, () => console.log('server started'))