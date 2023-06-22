const express = require('express');
const rotas = require('./routes/index.js');


const app = express();
const port = 3000;

app.listen(port, () => {
    console.log(`Example app listening at http://localhost:${port}`);
});


rotas(app)

module.exports = app;