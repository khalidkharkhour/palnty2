const { PurgeCSS } = require('purgecss');

async function purge() {
  const purgeCSSResult = await new PurgeCSS().purge({
    content: ['**/*.html', '**/*.js', '**/*.php'],
    css: ['style.css'],
    output: 'style.css',
    // Autres options de configuration
  });

  console.log(purgeCSSResult);
}

purge();
