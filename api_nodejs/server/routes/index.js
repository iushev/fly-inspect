const controllers = require('../controllers')

module.exports = (app) => {
    app.get('/api', (req, res) => res.status(200).send({
        message: 'Welcome to the FlyInspect API!',
    }));

    app.get('/api/r5objects', controllers.r5objects.list);
    // app.post('/api/r5objects', r5objectsController.create);


    app.get('/api/r5events', controllers.r5events.list);

    app.get('/api/events', controllers.events.list);
};
