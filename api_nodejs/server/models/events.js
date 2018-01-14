'use strict';
module.exports = (sequelize, DataTypes) => {
  var events = sequelize.define('events', {
    code: {
      type: DataTypes.STRING(30),
      allowNull: false,
      validate: {
          notNull: true,
          notEmpty: true,
      },
    },
    description: DataTypes.STRING(80),
    type: DataTypes.STRING(4),
    rtype: DataTypes.STRING(4),
    date: DataTypes.DATE,
    status: DataTypes.STRING(4),
    rstatus: DataTypes.STRING(4),
  }, {
    timestamps: false,
    tableName: 'tbl_event',
  });
  return events;
};