const { events } = require('../models');
// import { events } from '../models/events';

module.exports = {
    list(req, res) {
        return events
            .findAll({ limit: 20 })
            .then(events => res.status(200).send({
                next: req.url,
                events,
            }))
            .catch(error => res.status(400).send(error));
    },
};