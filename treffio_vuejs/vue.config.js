const { defineConfig } = require('@vue/cli-service')
module.exports = defineConfig({
  transpileDependencies: true,
  devServer:{
      proxy: 'https://treffio-taskmanager-api.herokuapp.com'  //evade CORS (honestly I don't know if it was exactly necessary but now CORS is not complaining anymore so I don't want to touch it)
  }
})
