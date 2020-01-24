require('./bootstrap');

window.Vue = require('vue');
import Vue from 'vue'
import { Form, HasError, AlertError } from 'vform'
window.Form = Form
Vue.component(HasError.name, HasError)
Vue.component(AlertError.name, AlertError)

window.$ = require('jquery')
window.JQuery = require('jquery')

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';

import App from './App.vue';
Vue.use(VueAxios, axios);

import ProjectNameComponent from './components/ProjectNameComponent.vue';
import EditProjectNameComponent from './components/EditProjectNameComponent.vue';
import CreateComponent from './components/CreateComponent.vue';
import IndexComponent from './components/IndexComponent.vue';
import EditComponent from './components/EditComponent.vue';
import HouseEntryComponent from './components/HouseEntryComponent.vue';
import EditHouseComponent from './components/EditHouseComponent.vue';
import FloorEntryComponent from './components/FloorEntryComponent.vue';
import EditFloorEntryComponent from './components/EditFloorEntryComponent.vue';
import FlatnoEntryComponent from './components/FlatnoEntryComponent.vue';
import EditFlatnoEntryComponent from './components/EditFlatnoEntryComponent.vue';
import FlatsizeEntryComponent from './components/FlatsizeEntryComponent.vue';
import EditFlatsizeEntryComponent from './components/EditFlatsizeEntryComponent.vue';
import FlatpriceEntryComponent from './components/FlatpriceEntryComponent.vue';
import EditFlatpriceEntryComponent from './components/EditFlatpriceEntryComponent.vue';
import DiscountEntryComponent from './components/DiscountEntryComponent.vue';
import EditDiscountEntryComponent from './components/EditDiscountEntryComponent.vue';
import CommissionTypeEntryComponent from './components/CommissionTypeEntryComponent.vue';
import EditCommissionTypeEntryComponent from './components/EditCommissionTypeEntryComponent.vue';
import CommissionEntryComponent from './components/CommissionEntryComponent.vue';
import EditCommissionEntryComponent from './components/EditCommissionEntryComponent.vue';
import IncentiveComponent from './components/IncentiveComponent.vue';
import EditIncentiveComponent from './components/EditIncentiveComponent.vue';
import StaffTypeComponent from './components/StaffTypeComponent.vue';
import EditStaffTypeComponent from './components/EditStaffTypeComponent.vue';
import DesignationComponent from './components/DesignationComponent.vue';
import EditDesignationComponent from './components/EditDesignationComponent.vue';
import StaffComponent from './components/StaffComponent.vue';
import EditStaffComponent from './components/EditStaffComponent.vue';
import SallaryComponent from './components/SallaryComponent.vue';
import EditSallaryComponent from './components/EditSallaryComponent.vue';
import YearComponent from './components/YearComponent.vue';
import EditYearComponent from './components/EditYearComponent.vue';
import MenuComponent from './components/MenuComponent.vue';
import EditMenuComponent from './components/EditMenuComponent.vue';
import SubMenuComponent from './components/SubMenuComponent.vue';
import EditSubMenuComponent from './components/EditSubMenuComponent.vue';
import PermissionMenuComponent from './components/PermissionMenuComponent.vue';
import EditPermissionMenuComponent from './components/EditPermissionMenuComponent.vue';
import PermissionSubMenuComponent from './components/PermissionSubMenuComponent.vue';
import EditPermissionSubMenuComponent from './components/EditPermissionSubMenuComponent.vue';
import FlatDiscountEntryComponent from './components/FlatDiscountEntryComponent.vue';
import EditFlatDiscountEntryComponent from './components/EditFlatDiscountEntryComponent.vue';
const routes = [
 {    name: 'name',
      path: '/project-name',
      component: ProjectNameComponent
  },
  { name: 'house', 
    path: '/house-entry',
    component: HouseEntryComponent
  },
  {
    name:'floorEntry',
    path: '/floor-entry',
    component: FloorEntryComponent
},
{
    name:'flatnoEntry',
    path: '/flatno-entry',
    component:FlatnoEntryComponent
},
{
    name:'flatsizeEntry',
    path: '/flatsizeentry',
    component:FlatsizeEntryComponent
},
{
    name:'flatpriceEntry',
    path: '/flatpriceentry',
    component:FlatpriceEntryComponent
},
{
    name:'discountEntry',
    path: '/discount',
    component:DiscountEntryComponent
},
{
    name:'commissionType',
    path: '/commissionType',
    component:CommissionTypeEntryComponent
},
{
    name:'commissionEntry',
    path: '/commissionEntry',
    component:CommissionEntryComponent
},
{
    name:'incentive',
    path: '/incentive',
    component:IncentiveComponent
},
{
    name:'staffType',
    path: '/staffType',
    component:StaffTypeComponent
},
{
    name:'designation',
    path: '/designation',
    component:DesignationComponent
},
{
    name:'staff',
    path: '/staff',
    component:StaffComponent
},
{
    name:'sallary',
    path: '/sallary',
    component:SallaryComponent
},
{
    name:'year',
    path: '/year',
    component:YearComponent
},
{
    name:'menu',
    path: '/menu',
    component:MenuComponent
},
{
    name:'submenu',
    path: '/submenu',
    component:SubMenuComponent
},
{
    name:'permissionmenu',
    path: '/permissionmenu',
    component:PermissionMenuComponent
},
{
    name:'permissionSubmenu',
    path: '/permissionSubmenu',
    component:PermissionSubMenuComponent
},
{
    name:'discountentry',
    path: '/discountentry',
    component:FlatDiscountEntryComponent
},

{
    name: 'editFloor',
    path: '/editFloor/:id',
    component: EditFloorEntryComponent
},
{
    name: 'editFlat',
    path: '/editFlat/:id',
    component: EditFlatnoEntryComponent
},
{
    name: 'editFlatsize',
    path: '/editFlatsize/:id',
    component: EditFlatsizeEntryComponent
},
{
    name: 'editFlatprice',
    path: '/editFlatprice/:id',
    component: EditFlatpriceEntryComponent
},
{
    name: 'editDiscount',
    path: '/editDiscount/:id',
    component: EditDiscountEntryComponent
},
{
    name: 'editCommissionType',
    path: '/editCommissionType/:id',
    component: EditCommissionTypeEntryComponent
},
{
    name: 'editCommissionEntry',
    path: '/editCommissionEntry/:id',
    component: EditCommissionEntryComponent
},
{
    name: 'editIncentive',
    path: '/editIncentive/:id',
    component: EditIncentiveComponent
},
{
    name: 'editStaffType',
    path: '/editStaffType/:id',
    component: EditStaffTypeComponent
},
{
    name: 'editDesignation',
    path: '/editDesignation/:id',
    component: EditDesignationComponent
},
{
    name: 'editStaff',
    path: '/editStaff/:id',
    component: EditStaffComponent
},
{
    name: 'editSallary',
    path: '/editSallary/:id',
    component: EditSallaryComponent
},
{
    name: 'editProjectName',
    path: '/editProjectName/:id',
    component: EditProjectNameComponent
},
{
    name: 'editHouse',
    path: '/editHouse/:id',
    component: EditHouseComponent
},
{
    name: 'editYear',
    path: '/editYear/:id',
    component: EditYearComponent
},
{
    name: 'editMenu',
    path: '/editMenu/:id',
    component: EditMenuComponent
},
{
    name: 'editSubMenu',
    path: '/editSubMenu/:id',
    component: EditSubMenuComponent
},
{
    name:'editpermissionmenu',
    path: '/editpermissionmenu',
    component:EditPermissionMenuComponent
},
{
    name:'editpermissionSubmenu',
    path: '/editpermissionSubmenu',
    component:EditPermissionSubMenuComponent
},
{
    name: 'editdiscountentry',
    path: '/editdiscountentry/:id',
    component: EditFlatDiscountEntryComponent
},
  {
      name: 'create',
      path: '/create',
      component: CreateComponent
  },
  {
      name: 'posts',
      path: '/posts',
      component: IndexComponent
  },
  {
      name: 'edit',
      path: '/edit/:id',
      component: EditComponent
  }
];

const router = new VueRouter({ mode: 'history', routes: routes});
const app = new Vue(Vue.util.extend({ router }, App)).$mount('#app');