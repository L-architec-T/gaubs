self.addEventListener('install', function(event) {
    event.waitUntil(
        caches.open('gaubs').then(function(cache) {
            return cache.addAll([
                '/',
                '/index.php',
                '/img/logo_png.png'
                // Add any other static assets that should be cached
            ]);
        })
    );
});

self.addEventListener('fetch', function(event) {
    event.respondWith(
        caches.match(event.request).then(function(response) {
            return response || fetch(event.request);
        })
    );
});