<?php

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not a valid entry point');
}

require_once('modules/ACLRoles/ACLRole.php');
require_once('modules/ACLActions/ACLAction.php');
require_once('modules/SecurityGroups/SecurityGroup.php');

// Create custom role
function createCustomRole()
{
    $role_name = "Testing Role";
    $role_description = "This is the testing role description";

    $GLOBALS['log']->fatal("Role {$role_name} creating started");

    $existingRole = BeanFactory::getBean('ACLRoles')->retrieve_by_string_fields([
        'name' => $role_name
    ]);

    if ($existingRole) {
        $GLOBALS['log']->fatal("Role '{$role_name}' already exists. Skipping creation.");
        return $existingRole->id;
    }

    $role = BeanFactory::getBean('ACLRoles');
    $role->name = $role_name;
    $role->description = $role_description;
    $role->save();

    $GLOBALS['log']->fatal("Role '{$role_name}' created successfully with ID: {$role->id}");
    return $role->id;
}

// Set role permissions
// function setRolePermissions($role_id)
// {
//     if (!$role_id) return;

//     $GLOBALS['log']->fatal("Setting permissions for role ID: {$role_id}");

//     $permissions = [
//         'Accounts' => [
//             'list' => ACL_ALLOW_ALL,
//             'view' => ACL_ALLOW_ALL,
//             'edit' => ACL_ALLOW_GROUP,
//             'delete' => ACL_ALLOW_OWNER,
//             'import' => ACL_ALLOW_NONE,
//             'export' => ACL_ALLOW_GROUP,
//             'massupdate' => ACL_ALLOW_NONE,
//             'access' => ACL_ALLOW_ALL,
//         ],
//         'Contacts' => [
//             'list' => ACL_ALLOW_ALL,
//             'view' => ACL_ALLOW_ALL,
//             'edit' => ACL_ALLOW_ALL,
//             'delete' => ACL_ALLOW_OWNER,
//             'access' => ACL_ALLOW_ALL,
//         ],
//     ];

//     foreach ($permissions as $module => $actions) {

//         $acl_actions = ACLAction::getActions('module', $module, true);

//         if (empty($acl_actions)) {
//             $GLOBALS['log']->fatal("No ACL actions found for module {$module}");
//             continue;
//         }

//         foreach ($actions as $action => $access_level) {

//             if (!empty($acl_actions[$action]['id'])) {

//                 $action_id = $acl_actions[$action]['id'];
//                 ACLRole::setAction($role_id, $action_id, $access_level);

//                 $GLOBALS['log']->fatal("Set {$module}.{$action} = {$access_level}");
//             } else {
//                 $GLOBALS['log']->fatal("Action '{$action}' does not exist for module '{$module}'");
//             }
//         }
//     }

//     $GLOBALS['log']->fatal("Permissions successfully assigned to role ID: {$role_id}");
// }


// Assign role to Security Group
function assignRoleToSecurityGroups($role_id, $group_name)
{
    if (!$role_id) return;

    $group = BeanFactory::getBean('SecurityGroups')->retrieve_by_string_fields([
        'name' => $group_name
    ]);

    if (!$group) {
        $group = BeanFactory::getBean('SecurityGroups');
        $group->name = $group_name;
        $group->save();
        $GLOBALS['log']->fatal("Created Security Group: {$group_name}");
    }

    if (!$group->load_relationship('aclroles')) {
        $GLOBALS['log']->fatal("Cannot load aclroles relationship for SecurityGroup.");
        return;
    }

    $group->aclroles->add($role_id);
    $GLOBALS['log']->fatal("Assigned Role ID: {$role_id} to Security Group ID: {$group->id}");
}

// Execute the script
$GLOBALS['log']->fatal("=== CUSTOM ROLE SCRIPT EXECUTED ===");

$role_id = createCustomRole();
// setRolePermissions($role_id);
assignRoleToSecurityGroups($role_id, "Testing Security Group");

$GLOBALS['log']->fatal("=== ROLE CREATION PROCESS COMPLETED ===");

