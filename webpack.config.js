var Encore = require('@symfony/webpack-encore');
var path = require("path");
const webpack = require("webpack");

// Manually configure the runtime environment if not already configured yet by the "encore" command.
// It's useful when you use tools that rely on webpack.config.js file.
if (!Encore.isRuntimeEnvironmentConfigured()) {
      Encore.configureRuntimeEnvironment(process.env.NODE_ENV || 'dev');
}

Encore
  // directory where compiled assets will be stored
  .setOutputPath('public/build/')
  // public path used by the web server to access the output path
  .setPublicPath('/build')
  // only needed for CDN's or sub-directory deploy
  //.setManifestKeyPrefix('build/')
  /*
   * ENTRY CONFIG
   *
   * Each entry will result in one JavaScript file (e.g. app.js)
   * and one CSS file (e.g. app.sass) if your JavaScript imports CSS.
   */
  //.addEntry('front', './assets/front/app.js')
  .addExternals({CodeMirror: 'codemirror'})

  .addEntry('front', [
        './assets/front/app.js'
  ])

  // will require an extra script tag for runtime.js
  // but, you probably want this, unless you're building a single-page app
  .enableSingleRuntimeChunk()

  /*
   * FEATURE CONFIG
   *
   * Enable & configure other features below. For a full
   * list of features, see:
   * https://symfony.com/doc/current/frontend.html#adding-more-features
   */
  .enableBuildNotifications()
  .enableSourceMaps(!Encore.isProduction())
  // enables hashed filenames (e.g. app.abc123.css)
  .enableVersioning()
  .cleanupOutputBeforeBuild()

  // enables Sass/SCSS support
  .enableSassLoader()

;

module.exports = Encore.getWebpackConfig();
module.exports["resolve"]["symlinks"] = false;