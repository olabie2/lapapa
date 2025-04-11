<?php
// lang/en/profile.php

return [
    // Titles & Headings
    'profile' => 'Profile',
    'profile_settings' => 'Profile Settings',
    'update_profile_information' => 'Update Profile Information',
    'update_password' => 'Update Password',
    'update_email' => 'Update Email Address',
    'two_factor_auth' => 'Two Factor Authentication',
    'delete_account' => 'Delete Account',

    // Fields & Labels
    'name' => 'Name',
    'email' => 'Email',
    'current_password' => 'Current Password',
    'new_password' => 'New Password',
    'confirm_password' => 'Confirm New Password',
    'password' => 'Password', // Generic password label

    // Actions & Buttons
    'save' => 'Save',
    'save_changes' => 'Save Changes',
    'saving' => 'Saving...',
    'enable' => 'Enable',
    'disable' => 'Disable',
    'confirm' => 'Confirm',
    'cancel' => 'Cancel',
    'delete' => 'Delete',
    'deleting' => 'Deleting...',

    // Placeholders & Instructions
    'enter_password_to_confirm' => 'Enter your password to confirm this action.',
    'confirm_delete_intro' => 'Are you sure you want to delete your account? This action cannot be undone.',
    'confirm_delete_warning' => 'Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.',
    '2fa_description' => 'Add an additional layer of security to your account by enabling two-factor authentication.',
    '2fa_enabled_summary' => 'You have enabled two-factor authentication.',
    '2fa_disabled_summary' => 'You have not enabled two-factor authentication.',
    '2fa_setup_info' => 'To finish enabling two-factor authentication, scan the following QR code using your phone\'s authenticator application or enter the setup key and provide the generated OTP code.', // Placeholder text
    '2fa_code' => 'Authentication Code', // Placeholder text

    // Success Messages
    'profile_updated' => 'Profile information updated successfully.',
    'password_updated' => 'Password updated successfully.',
    'email_updated' => 'Email address updated successfully. Please check your new email for a verification link if required.',
    'account_deleted' => 'Your account has been deleted successfully.',
    '2fa_enabled' => 'Two-factor authentication enabled successfully.', // Placeholder text
    '2fa_disabled' => 'Two-factor authentication disabled successfully.', // Placeholder text

    // Error Messages
    'update_failed' => 'Failed to update profile. Please try again.',
    'current_password_incorrect' => 'The provided current password does not match your actual current password.',
    'delete_failed' => 'Failed to delete account. Please check your password and try again.',
    'password_confirmation_mismatch' => 'The password confirmation does not match.',

    // Misc
    'requires_password' => 'Requires current password for confirmation',

];