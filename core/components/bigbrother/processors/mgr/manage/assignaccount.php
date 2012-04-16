<?php
/**
 * Set current user assigned account
 *
 * @package bigbrother
 * @subpackage processors
 */
$ga =& $modx->bigbrother;
$response['success'] = false;

/* Unassign override */
if($scriptProperties['account'] == 'Not assigned'){
    $settings = $this->modx->user->getMany('UserSettings');
    foreach($settings as $setting){
        $key = $setting->get('key');
        /* Remove account */
        if($key == 'bigbrother.account'){
            $setting->remove();
        }
        /* Remove nice name */
        if($key == 'bigbrother.account_name'){
            $setting->remove();
        }
    }
/* Assign selected account to a user */    
} else {
    $settings = $this->modx->user->getMany('UserSettings');
    if(!$settings){
        $account = array();
        
        /* Assign the account key - used for report */
        $new =  $modx->newObject('modUserSetting');
        $new->set('namespace', 'bigbrother');
        $new->set('key', 'bigbrother.account');
        $new->set('value', $scriptProperties['account']);
        $account[] = $new;
        
        /* Add the account name - For display only */
        $new =  $modx->newObject('modUserSetting');
        $new->set('namespace', 'bigbrother');
        $new->set('key', 'bigbrother.account_name');
        $new->set('value', $scriptProperties['accountName']);
        $account[] = $new;    
        
        $this->modx->user->addMany($account);
    } else {
        foreach($settings as $setting){
            $key = $setting->get('key');
            /* Update account */
            if($key == 'bigbrother.account'){
                $setting->set('value', $scriptProperties['account']);
            }
            /* Update nice name */
            if($key == 'bigbrother.account_name'){
                $setting->set('value', $scriptProperties['accountName']);
            }
        }
    }
}

/* Save current user object */
if( $this->modx->user->save() ){
    $response['success'] = true;
}
return $modx->toJSON($response);