// Views
// import profile from './components/about/profile'
// import home_default from './components/home/home_default'
// import project from './components/project/project'

export const routes = [
	{ name: 'home', props: true,path: '/', component: require('./components/home/home.vue').default },
	{ name: 'page', props: true,path: '/home', component: require('./components/home/home.vue').default },
    { name: 'about', props: true, path: '/about', component: require('./components/about/profile.vue').default },
    { name: 'project', props: true, path: '/projects', component: require('./components/project/project.vue').default },
    { name: 'detail-project', props: true, path: '/projects/detail', component: require('./components/project/detail-project.vue').default },
    { name: 'contact', props: true, path: '/contact', component: require('./components/contact/contact.vue').default },
    { name: 'news', props: true, path: '/news', component: require('./components/news/news.vue').default },

];