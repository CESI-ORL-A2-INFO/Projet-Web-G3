/* // Nom du cache
var CACHE_NAME = 'ma_pwa_cache';

// Liste des ressources à enregistrer dans le cache
var urlsToCache = [
  './index.php',
  './css/index.css',
  './css/footer.css',
  './css/navbar.css',
  './css/navbarPerm.css',
  './logo.png'
];

// Installation du service worker
self.addEventListener('install', function(event) {
  // Enregistrer les ressources dans le cache
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(function(cache) {
        console.log('Cache ouvert.');
        return cache.addAll(urlsToCache);
      })
  );
});

// Activation du service worker
self.addEventListener('activate', function(event) {
  // Supprimer les anciens caches
  event.waitUntil(
    caches.keys().then(function(cacheNames) {
      return Promise.all(
        cacheNames.filter(function(cacheName) {
          return cacheName !== CACHE_NAME;
        }).map(function(cacheName) {
          return caches.delete(cacheName);
        })
      );
    })
  );
});

// Intercepter les requêtes pour vérifier si elles sont dans le cache
self.addEventListener('fetch', function(event) {
  event.respondWith(
    caches.match(event.request)
      .then(function(response) {
        // Retourner la réponse depuis le cache
        if (response) {
          console.log('Ressource trouvée dans le cache.');
          return response;
        }

        // Récupérer la ressource depuis le réseau
        console.log('Ressource non trouvée dans le cache. Récupération depuis le réseau.');
        return fetch(event.request)
          .then(function(response) {
            // Enregistrer la réponse dans le cache
            return caches.open(CACHE_NAME)
              .then(function(cache) {
                cache.put(event.request, response.clone());
                return response;
              });
          });
      })
  );
}); */