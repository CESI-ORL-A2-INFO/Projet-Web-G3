// Nom du cache
var CACHE_NAME = 'ma_pwa_cache';

if ("serviceWorker" in navigator) {
  navigator.serviceWorker
    .register("./service-worker.js")
    .then(serviceWorker => {
      console.log("Service Worker registered: ", serviceWorker);
    })
    .catch(error => {
      console.error("Error registering the Service Worker: ", error);
    });
}

// Installation du service worker
self.addEventListener('install', function (event) {
  event.waitUntil(
    caches.open('v1').then(function (cache) {
      return cache.addAll([
        'logo.png',
        'backgroundConnexion.jpg',
        'backgroundmobile.jpg',
        'logoEnt.png'
      ]);
    })
  );
});

/* // Activation du service worker
self.addEventListener('activate', function (event) {
  // Supprimer les anciens caches
  event.waitUntil(
    caches.keys().then(function (cacheNames) {
      return Promise.all(
        cacheNames.filter(function (cacheName) {
          return cacheName !== CACHE_NAME;
        }).map(function (cacheName) {
          return caches.delete(cacheName);
        })
      );
    })
  );
});

// Intercepter les requêtes pour vérifier si elles sont dans le cache
self.addEventListener('fetch', function (event) {
  event.respondWith(
    caches.match(event.request)
      .then(function (response) {
        // Retourner la réponse depuis le cache
        if (response) {
          console.log('Ressource trouvée dans le cache.');
          return response;
        }

        // Récupérer la ressource depuis le réseau
        console.log('Ressource non trouvée dans le cache. Récupération depuis le réseau.');
        return fetch(event.request)
          .then(function (response) {
            // Enregistrer la réponse dans le cache
            return caches.open(CACHE_NAME)
              .then(function (cache) {
                cache.put(event.request, response.clone());
                return response;
              });
          });
      })
  );
});  */