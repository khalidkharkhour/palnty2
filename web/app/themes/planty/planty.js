const { PurgeCSS } = require('purgecss');
async function purge() {
  const purgeCSSResult = await new PurgeCSS().purge(require('./purgecss.config.js'));
  console.log(purgeCSSResult);
}
purge();

module.exports = {
  content: ['**/*.html', '**/*.js', '**/*.php'],
  css: ['style.css'],
  output: 'style.css',
  // Autres options de configuration
};
