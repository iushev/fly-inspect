import axios from 'axios';

const instance = axios.create({
    baseURL: 'http://api.flyinspect.local/api',
});

instance.defaults.xsrfCookieName = 'csrftoken';
instance.defaults.xsrfHeaderName = 'X-CSRFToken';

export default instance;