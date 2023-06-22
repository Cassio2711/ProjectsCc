const {Router} = require('express');
const PessoasController = require('../controller/PessoaController.js');

const router = Router();

router.get('/pessoas',PessoasController.pegarTodasAsPessoas)
    

module.exports = router;