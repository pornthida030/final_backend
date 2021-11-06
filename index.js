const express = require('express')
const app = express()

app.get('/api', (req, res) => {
  res.status(200).json({api: 'version 1'})
})

app.listen(3000, () => console.log('server started'))