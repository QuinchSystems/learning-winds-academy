const api = axios.create({
    baseUrl: BASE_URL,
    'X-CSRF-Token': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
});
