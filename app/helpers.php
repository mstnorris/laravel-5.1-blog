<?php

/*
 * Set "active" state on navbar links
 */
function set_active($path, $active = 'active') {
    return Request::is($path) ? $active : '';
}

/*
 * Sweet Alerts
 */
if (! function_exists('alert')) {
    /**
     * Arrange for an alert message.
     *
     * @param  string|null $message
     * @return SweetAlert\SweetAlertNotifier
     */
    function alert($message = null)
    {
        $notifier = app('uxweb.sweet-alert');
        if (! is_null($message)) {
            return $notifier->message($message);
        }
        return $notifier;
    }
}