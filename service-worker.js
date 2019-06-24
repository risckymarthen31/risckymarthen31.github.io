const FILES_TO_CACHE = [ '_index.html'];
const CACHE_NAME="namaCache";
self.addEventListener('activate', (evt) => {

  evt.waitUntil( 
    caches.keys().then((keyList) => { 
      return Promise.all(keyList.map((key) => { 
        if (key !== CACHE_NAME) { 
          console.log('[ServiceWorker] Removing old cache', key); 
          return caches.delete(key); 
        } 
      }));
    })
    );

});

self.addEventListener('fetch', (evt) => {

  evt.respondWith( 
    fetch(evt.request) 
    .catch(() => { 
      return caches.open(CACHE_NAME) 
      .then((cache) => { 
        return cache.match('_index.html'); 
      }); 
    }) 
    ); 


  evt.waitUntil( 
    caches.keys().then((keyList) => { 
      return Promise.all(keyList.map((key) => { 
        if (key !== CACHE_NAME) { 
          console.log('[ServiceWorker] Removing old cache', key); 
          return caches.delete(key); 
        } 
      }));
    })
    );
});

self.addEventListener('fetch', (evt) => {
  evt.respondWith( 
    fetch(evt.request) 
    .catch(() => { 
      return caches.open(CACHE_NAME) 
      .then((cache) => { 
        return cache.match('_index.html'); 
      }); 
    }) 
    ); 

});

self.addEventListener('install', (evt) => {
 evt.waitUntil( 
   caches.open(CACHE_NAME).then((cache) => { 

     console.log('[ServiceWorker] Pre-caching offline page'); 
     return cache.addAll(FILES_TO_CACHE);

     console.log('[ServiceWorker] Pre-caching offline page'); 
     return cache.addAll(FILES_TO_CACHE);

   }) 
   );
 self.skipWaiting();
});
