'use strict';
const {
  Model
} = require('sequelize');
module.exports = (sequelize, DataTypes) => {
  class Trumas extends Model {
    /**
     * Helper method for defining associations.
     * This method is not a part of Sequelize lifecycle.
     * The `models/index` file will call this method automatically.
     */
    static associate(models) {
      Trumas.hasMany(models.Matriculas,{
        foreignKey:'truma_id'
      })
      Trumas.belongsTo(models.Pessoas,{
        foreignKey:'docente_id'
      });
      Trumas.belongsTo(models.Niveis,{
        foreignKey:'nivel_id'
      })
    }
  }
  Trumas.init({
    data_inicio: DataTypes.DATEONLY
  }, {
    sequelize,
    modelName: 'Trumas',
    paranoid: true,
  });
  return Trumas;
};