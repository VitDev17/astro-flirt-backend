import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus';
window.Alpine = Alpine;

Alpine.plugin(focus);

Alpine.start();

const options = {
    method: 'POST',
    url: import.meta.env.VITE_AZTRO_URL,
    params: {sign: 'aquarius', day: 'today'},
    headers: {
      'X-RapidAPI-Key': import.meta.env.VITE_AZTRO_API,
      'X-RapidAPI-Host': import.meta.env.VITE_RAPIDAPI_HOST
    }
};

axios.request(options).then(function (response) {
    console.log(response.data);
}).catch(function (error) {
    console.error(error);
});