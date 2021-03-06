<?php


Auth::routes();

Route::get('/', 'HomeController@index');

Route::post('/index/project-name-create', 'ProjectNameController@storeName');
Route::get('/api/projectNames', 'ProjectNameController@viewProjectName');
Route::delete('/index/deleteName/{id}', 'ProjectNameController@deleteName');
Route::get('/post/editProjectName/{id}', 'ProjectNameController@editProjectName');
Route::post('/post/updateProjectName/{id}', 'ProjectNameController@updateProjectName');
Route::post('/index/house-entry-create', 'HouseController@storeHouse');
Route::get('/api/houseNames', 'HouseController@viewHouse');
Route::delete('/index/deleteHouse/{id}', 'HouseController@deleteHouse');
Route::get('/post/editHouse/{id}', 'HouseController@editHouse');
Route::post('/post/updateHouse/{id}', 'HouseController@updateHouse');
Route::post('/index/floor-entry-create', 'FloorentryController@storeFloor');
Route::get('/api/floors', 'FloorentryController@viewFloor');
Route::delete('/index/deleteFloor/{id}', 'FloorentryController@deleteFloor');
Route::get('/post/editFloor/{id}', 'FloorentryController@editFloor');
Route::post('/post/updateFloor/{id}', 'FloorentryController@updateFloor');
Route::post('/index/flatno-entry-create', 'FlatnoController@storeFlat');
Route::get('/api/flats', 'FlatnoController@viewFlat');
Route::delete('/index/deleteFlat/{id}', 'FlatnoController@deleteFlat');
Route::get('/post/editFlat/{id}', 'FlatnoController@editFlat');
Route::post('/post/updateFlat/{id}', 'FlatnoController@updateFlat');
Route::post('/index/flatsize-entry-create', 'FlatSizeController@storeFlatSize');
Route::get('/api/flatsize', 'FlatSizeController@viewFlatSize');
Route::delete('/index/deleteFlatsize/{id}', 'FlatSizeController@deleteFlatSize');
Route::get('/post/editFlatsize/{id}', 'FlatSizeController@editFlatSize');
Route::post('/post/updateFlatsize/{id}', 'FlatSizeController@updateFlatSize');
Route::post('/index/flatprice-entry-create', 'FlatPriceController@storeFlatPrice');
Route::get('/api/flatprice', 'FlatPriceController@viewFlatPrice');
Route::delete('/index/deleteFlatprice/{id}', 'FlatPriceController@deleteFlatPrice');
Route::get('/post/editFlatprice/{id}', 'FlatPriceController@editFlatPrice');
Route::post('/post/updateFlatprice/{id}', 'FlatPriceController@updateFlatPrice');
Route::post('/index/discount-entry-create', 'DiscountController@storeDiscount');
Route::get('/api/discount', 'DiscountController@viewDiscount');
Route::delete('/index/deleteDiscount/{id}', 'DiscountController@deleteDiscount');
Route::get('/post/editDiscount/{id}', 'DiscountController@editDiscount');
Route::post('/post/updateDiscount/{id}', 'DiscountController@updateDiscount');
Route::post('/index/commissionType-entry-create', 'CommissionTypeController@storeCommissionType');
Route::get('/api/commissionType', 'CommissionTypeController@viewCommissionType');
Route::delete('/index/deleteCommissionType/{id}', 'CommissionTypeController@deleteCommissionType');
Route::get('/post/editCommissionType/{id}', 'CommissionTypeController@editCommissionType');
Route::post('/post/updateCommissionType/{id}', 'CommissionTypeController@updateCommissionType');
Route::post('/index/commissionEntry-entry-create', 'CommissionEntryController@storeCommissionEntry');
Route::get('/api/commissionEntry', 'CommissionEntryController@viewCommissionEntry');
Route::delete('/index/deleteCommissionEntry/{id}', 'CommissionEntryController@deleteCommissionEntry');
Route::get('/post/editCommissionEntry/{id}', 'CommissionEntryController@editCommissionEntry');
Route::post('/post/updateCommissionEntry/{id}', 'CommissionEntryController@updateCommissionEntry');
Route::post('/index/incentive-entry-create', 'IncentiveEntryController@storeIncentive');
Route::get('/api/incentive', 'IncentiveEntryController@viewIncentive');
Route::delete('/index/deleteIncentive/{id}', 'IncentiveEntryController@deleteIncentive');
Route::get('/post/editIncentive/{id}', 'IncentiveEntryController@editIncentive');
Route::post('/post/updateIncentive/{id}', 'IncentiveEntryController@updateIncentive');
Route::post('/index/staffType-entry-create', 'StaffTypeController@storeStaffType');
Route::get('/api/staffType', 'StaffTypeController@viewStaffType');
Route::delete('/index/deleteStaffType/{id}', 'StaffTypeController@deleteStaffType');
Route::get('/post/editStaffType/{id}', 'StaffTypeController@editStaffType');
Route::post('/post/updateStaffType/{id}', 'StaffTypeController@updateStaffType');
Route::post('/index/designation-entry-create', 'DesignationController@storeDesignation');
Route::get('/api/designation', 'DesignationController@viewDesignation');
Route::delete('/index/deleteDesignation/{id}', 'DesignationController@deleteDesignation');
Route::get('/post/editDesignation/{id}', 'DesignationController@editDesignation');
Route::post('/post/updateDesignation/{id}', 'DesignationController@updateDesignation');
Route::post('/index/staff-entry-create', 'StaffController@storeStaff');
Route::get('/api/staff', 'StaffController@viewStaff');
Route::delete('/index/deleteStaff/{id}', 'StaffController@deleteStaff');
Route::get('/post/editStaff/{id}', 'StaffController@editStaff');
Route::post('/post/updateStaff/{id}', 'StaffController@updateStaff');
Route::post('/index/sallary-entry-create', 'FixSallaryController@storeSallary');
Route::get('/api/sallary', 'FixSallaryController@viewSallary');
Route::delete('/index/deleteSallary/{id}', 'FixSallaryController@deleteSallary');
Route::get('/post/editSallary/{id}', 'FixSallaryController@editSallary');
Route::post('/post/updateSallary/{id}', 'FixSallaryController@updateSallary');
Route::post('/index/year-entry-create', 'YearEntryController@storeYear');
Route::get('/api/year', 'YearEntryController@viewYear');
Route::delete('/index/deleteYear/{id}', 'YearEntryController@deleteYear');
Route::get('/post/editYear/{id}', 'YearEntryController@editYear');
Route::post('/post/updateYear/{id}', 'YearEntryController@updateYear');
Route::post('/index/menu-entry-create', 'MenuController@storeMenu');
Route::get('/api/menu', 'MenuController@viewMenu');
Route::delete('/index/deleteMenu/{id}', 'MenuController@deleteMenu');
Route::get('/post/editMenu/{id}', 'MenuController@editMenu');
Route::post('/post/updateMenu/{id}', 'MenuController@updateMenu');
Route::post('/index/submenu-entry-create', 'SubMenuController@storeSubMenu');
Route::get('/api/submenu', 'SubMenuController@viewSubMenu');
Route::delete('/index/deleteSubMenu/{id}', 'SubMenuController@deleteSubMenu');
Route::get('/post/editSubMenu/{id}', 'SubMenuController@editSubMenu');
Route::post('/post/updateSubMenu/{id}', 'SubMenuController@updateSubMenu');
Route::post('/index/permissionmenu-entry-create', 'PermissionMenuController@storerolemenu');
Route::get('/api/permissionmenu', 'PermissionMenuController@viewPermissionMenu');
Route::delete('/index/deletePermissionMenu/{id}', 'PermissionMenuController@deletePermissionMenu');
Route::get('/post/editPermissionMenu/{id}', 'PermissionMenuController@editPermissionMenu');
Route::post('/post/updatePermissionMenu/{id}', 'PermissionMenuController@updatePermissionMenu');
Route::post('/status/editMenuStatus/{id}', 'PermissionMenuController@editStatus');
Route::post('/status/canclePermission/{id}', 'PermissionMenuController@canclePermission');
Route::post('/index/permissionSubmenu-entry-create', 'PermissionSubMenuController@storePsubmenu');
Route::get('/api/permissionSubmenu', 'PermissionSubMenuController@viewPermissionSubMenu');
Route::delete('/index/deletePermissionSubMenu/{id}', 'PermissionSubMenuController@deletePermissionSubMenu');
Route::get('/post/editPermissionSubMenu/{id}', 'PermissionSubMenuController@editPermissionSubMenu');
Route::post('/post/updatePermissionSubMenu/{id}', 'PermissionSubMenuController@updatePermissionSubMenu');
Route::post('/status/editSubMenuStatus/{id}', 'PermissionSubMenuController@editStatus');
Route::post('/status/canclePermissions/{id}', 'PermissionSubMenuController@canclePermission');
Route::post('/index/flatDiscount-entry-create', 'FlatDiscountController@storeDiscount');
Route::get('/api/flatDiscount', 'FlatDiscountController@viewDiscount');
Route::delete('/index/deleteFlatDiscount/{id}', 'FlatDiscountController@deleteDiscount');
Route::get('/post/editFlatDiscount/{id}', 'FlatDiscountController@editDiscount');
Route::post('/post/updateFlatDiscount/{id}', 'FlatDiscountController@updateDiscount');


Route::get('/{any}', 'HomeController@index')->where('any', '.*');

