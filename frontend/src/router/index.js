import Vue from 'vue'
import Router from 'vue-router'
import Dashboardv1 from '@/components/dashboards/v-1'
import Dashboardv2 from '@/components/dashboards/v-2'
import Dashboardv3 from '@/components/dashboards/v-3'
import Dashboardv4 from '@/components/dashboards/v-4'
import Dashboardv5 from '@/components/dashboards/v-5'
import Dashboardv6 from '@/components/dashboards/v-6'
import Login from '@/components/pages/Login'
import Register from '@/components/pages/Register'
import Pricing from '@/components/pages/Pricing'
import About from '@/components/pages/About'
import SinglePost from '@/components/pages/Single'
import Post from '@/components/pages/Post'
import Landing from '@/components/pages/Landing'
import Customers from '@/components/pages/Customers'
import Invoice from '@/components/pages/Invoice'
import Page from '@/components/pages/Page'
import Support from '@/components/pages/Support'
import Chat from '@/components/pages/Chat'
import Basicv1 from '@/components/profiles/Basic-1'
import Basicv2 from '@/components/profiles/Basic-2'
import Extended from '@/components/profiles/Extended'
import Grid from '@/components/css/Grid'
import Media from '@/components/css/Media'
import Utilities from '@/components/css/Utilities'
import Code from '@/components/css/Code'
import Icons from '@/components/css/Icons'
import Images from '@/components/css/Images'
import Typo from '@/components/css/Typo'
import Colors from '@/components/css/Colors'
import Hover from '@/components/css/Hover'
import Masks from '@/components/css/Masks'
import Shadows from '@/components/css/Shadows'
import Skins from '@/components/css/Skins'
import Buttons from '@/components/components/Buttons'
import Cards from '@/components/components/Cards'
import Panels from '@/components/components/Panels'
import List from '@/components/components/List'
import Pagination from '@/components/components/Pagination'
import Progress from '@/components/components/Progress'
import Tabs from '@/components/components/Tabs'
import Tags from '@/components/components/Tags'
import Collapse from '@/components/components/Collapse'
import DatePicker from '@/components/components/DatePicker'
import TimePicker from '@/components/components/TimePicker'
import Tooltips from '@/components/components/Tooltips'
import Popovers from '@/components/components/Popovers'
import Stepper from '@/components/components/Stepper'
import BasicForms from '@/components/forms/Basic'
import ExtendedForms from '@/components/forms/Extended'
import BasicTables from '@/components/tables/Basic'
import ExtendedTables from '@/components/tables/Extended'
import DataTables from '@/components/tables/DataTables'
import GoogleMaps from '@/components/maps/GoogleMaps'
import Fullscreen from '@/components/maps/Fullscreen'
import Modals from '@/components/modals/Modals'
import Charts from '@/components/charts/Charts'
import Sections from '@/components/sections/Sections'
import Calendar from '@/components/calendar/Calendar'
import Home from '@/pages/home/Home'
import LoginMeu from '@/pages/login/Login'
import RegisterMeu from '@/pages/login/Register'
import adminHome from '@/pages/dashboard/DashboardHome'

Vue.use(Router)

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '/',
      name: 'Home',
      component: Home
    },
    {
      path: '/login',
      name: 'Login',
      component: LoginMeu
    },
    {
      path: '/register',
      name: 'Register',
      component: RegisterMeu
    },
    {
      path: '/admin',
      name: 'adminHome',
      component: adminHome
    },

    
    //Material Design
    {
      path: '/mdbvue',
      name: 'Dashboard v.1',
      component: Dashboardv1
    },
    {
      path: '/dashboards/v-2',
      name: 'Dashboard v.2',
      component: Dashboardv2
    },
    {
      path: '/dashboards/v-3',
      name: 'Dashboard v.3',
      component: Dashboardv3
    },
    {
      path: '/dashboards/v-4',
      name: 'Dashboard v.4',
      component: Dashboardv4
    },
    {
      path: '/dashboards/v-5',
      name: 'Dashboard v.5',
      component: Dashboardv5
    },
    {
      path: '/dashboards/v-6',
      name: 'Dashboard v.6',
      component: Dashboardv6
    },
    {
      path: '/pages/login',
      name: 'Login Page',
      component: Login
    },
    {
      path: '/pages/register',
      name: 'Register Page',
      component: Register
    },
    {
      path: '/pages/pricing',
      name: 'Pricing Page',
      component: Pricing
    },
    {
      path: '/pages/about',
      name: 'About us Page',
      component: About
    },
    {
      path: '/pages/single',
      name: 'Single Post Page',
      component: SinglePost
    },
    {
      path: '/pages/post',
      name: 'Post Listing Page',
      component: Post
    },
    {
      path: '/pages/landing',
      name: 'Landing Page',
      component: Landing
    },
    {
      path: '/pages/customers',
      name: 'Customers',
      component: Customers
    },
    {
      path: '/pages/invoice',
      name: 'Invoice',
      component: Invoice
    },
    {
      path: '/pages/page',
      name: 'Page Creator',
      component: Page
    },
    {
      path: '/pages/support',
      name: 'Support',
      component: Support
    },
    {
      path: '/pages/chat',
      name: 'Chat',
      component: Chat
    },
    {
      path: '/profiles/basic-1',
      name: 'Profile v.1',
      component: Basicv1
    },
    {
      path: '/profiles/basic-2',
      name: 'Profile v.2',
      component: Basicv2
    },
    {
      path: '/profiles/extended',
      name: 'Profile v.3',
      component: Extended
    },
    {
      path: '/css/grid',
      name: 'Grid system',
      component: Grid
    },
    {
      path: '/css/media',
      name: 'Media object',
      component: Media
    },
    {
      path: '/css/utilities',
      name: 'Utilities / helpers',
      component: Utilities
    },
    {
      path: '/css/code',
      name: 'Code',
      component: Code
    },
    {
      path: '/css/icons',
      name: 'Icons',
      component: Icons
    },
    {
      path: '/css/images',
      name: 'Images',
      component: Images
    },
    {
      path: '/css/typo',
      name: 'Typography',
      component: Typo
    },
    {
      path: '/css/colors',
      name: 'Colors',
      component: Colors
    },
    {
      path: '/css/hover',
      name: 'Hover effects',
      component: Hover
    },
    {
      path: '/css/masks',
      name: 'Masks',
      component: Masks
    },
    {
      path: '/css/shadows',
      name: 'Shadows',
      component: Shadows
    },
    {
      path: '/css/skins',
      name: 'Skins',
      component: Skins
    },
    {
      path: '/components/buttons',
      name: 'Buttons',
      component: Buttons
    },
    {
      path: '/components/cards',
      name: 'Cards',
      component: Cards
    },
    {
      path: '/components/panels',
      name: 'Panels',
      component: Panels
    },
    {
      path: '/components/list',
      name: 'List',
      component: List
    },
    {
      path: '/components/pagination',
      name: 'Pagination',
      component: Pagination
    },
    {
      path: '/components/progress',
      name: 'Progress',
      component: Progress
    },
    {
      path: '/components/tabs',
      name: 'Tabs',
      component: Tabs
    },
    {
      path: '/components/tags',
      name: 'Tags',
      component: Tags
    },
    {
      path: '/components/collapse',
      name: 'Collapse',
      component: Collapse
    },
    {
      path: '/components/datepicker',
      name: 'Date Picker',
      component: DatePicker
    },
    {
      path: '/components/timepicker',
      name: 'Time Picker',
      component: TimePicker
    },
    {
      path: '/components/tooltips',
      name: 'Tooltips',
      component: Tooltips
    },
    {
      path: '/components/popovers',
      name: 'Popovers',
      component: Popovers
    },
    {
      path: '/components/stepper',
      name: 'Stepper',
      component: Stepper
    },
    {
      path: '/forms/basic',
      name: 'Basic Forms',
      component: BasicForms
    },
    {
      path: '/forms/extended',
      name: 'Extended Forms',
      component: ExtendedForms
    },
    {
      path: '/tables/basic',
      name: 'Basic tables',
      component: BasicTables
    },
    {
      path: '/tables/extended',
      name: 'Extended tables',
      component: ExtendedTables
    },
    {
      path: '/tables/datatables',
      name: 'DataTables',
      component: DataTables
    },
    {
      path: '/maps/googlemaps',
      name: 'Google Maps',
      component: GoogleMaps
    },
    {
      path: '/maps/fullscreen',
      name: 'Fullscreen Map',
      component: Fullscreen
    },
    {
      path: '/modals/modals',
      name: 'Modals',
      component: Modals
    },
    {
      path: '/charts/charts',
      name: 'Charts',
      component: Charts
    },
    {
      path: '/sections/sections',
      name: 'Sections',
      component: Sections
    },
    {
      path: '/calendar/calendar',
      name: 'Calendar',
      component: Calendar
    }
  ]
})
