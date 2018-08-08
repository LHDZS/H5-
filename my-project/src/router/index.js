import Vue from 'vue'
import Router from 'vue-router'
import App from '@/App'
import home from '@/index/home'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      name: '/App',
      component: App,
      children: [
        {path: '/', component: home}
      ]
    }
  ]
})
