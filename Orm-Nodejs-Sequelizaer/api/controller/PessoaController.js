const database = require('../models');

class PessoasController{
    static async pegarTodasAsPessoas(req,res){
        try{
            const todasPessoas = await database.Pessoas.findAll({   
            })
            return res.status(200).json(todasPessoas);            
        }catch{
            return res.status(500).json(error.message);
        }
    };
}

module.exports = PessoasController;