<?php defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(
                 'profile' => array(
                                    array(
                                            'field' => 'name',
                                            'label' => 'Name',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'email',
                                            'label' => 'Email Id',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'website_url',
                                            'label' => 'Website URL',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'title',
                                            'label' => 'Ttitle',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'description',
                                            'label' => 'Description',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'country',
                                            'label' => 'Country',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'city',
                                            'label' => 'City',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'type',
                                            'label' => 'Type',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'payment_category',
                                            'label' => 'Payment Category',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'payment_period',
                                            'label' => 'payment Period',
                                            'rules' => 'required'
                                         )
                                    ),
                 'login' => array(
                                    array(
                                            'field' => 'email',
                                            'label' => 'Email Id',
                                            'rules' => 'required|valid_email'
                                         ),
                                    array(
                                            'field' => 'password',
                                            'label' => 'Password',
                                            'rules' => 'required'
                                         )
                                    ),
                'sign_up_user' => array(
                                    array(
                                            'field' => 'username',
                                            'label' => 'User name',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'email',
                                            'label' => 'Email Id',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'password',
                                            'label' => 'Password',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'contact_number',
                                            'label' => 'Contact Numebr',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 're_password',
                                            'label' => 'Reenter Password',
                                            'rules' => 'required|matches[password]'
                                         )
                                    ),
                    'login_user' => array(
                                    array(
                                            'field' => 'email',
                                            'label' => 'Email Id',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'password',
                                            'label' => 'Password',
                                            'rules' => 'required'
                                         ),
                                    ),
                    'banner_form' => array(
                                    array(
                                            'field' => 'url',
                                            'label' => 'Website URL',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'banner_offer',
                                            'label' => 'Banner Offer',
                                            'rules' => 'required'
                                         ),
                                    ),
                    'user_profile_form' => array(
                                    array(
                                            'field' => 'name',
                                            'label' => 'Name',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'email',
                                            'label' => 'Email Id',
                                            'rules' => 'required'
                                         ),
                                    array(
                                        'field' => 'contact_number',
                                        'label' => 'Contact Number',
                                        'rules' => 'required'
                                    ),
                                    array(
                                            'field' => 'website_url',
                                            'label' => 'Website URL',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'title',
                                            'label' => 'Title',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'description',
                                            'label' => 'Description',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'country',
                                            'label' => 'Country',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'city',
                                            'label' => 'City',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'type',
                                            'label' => 'Type',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'payment_category',
                                            'label' => 'Payment Category',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'payment_period',
                                            'label' => 'Payment period',
                                            'rules' => 'required'
                                         )
                                    ),
                    'edit_profile' => array(
                                    array(
                                            'field' => 'name',
                                            'label' => 'Name',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'email',
                                            'label' => 'Email Id',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'website_url',
                                            'label' => 'Website URL',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'title',
                                            'label' => 'Ttitle',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'description',
                                            'label' => 'Description',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'country',
                                            'label' => 'Country',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'city',
                                            'label' => 'City',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'contact_number',
                                            'label' => 'Contact Number',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'type',
                                            'label' => 'Type',
                                            'rules' => 'required'
                                         )
                                    ),
                    'user_edit_profile_form' => array(
                                    array(
                                            'field' => 'name',
                                            'label' => 'Name',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'email',
                                            'label' => 'Email Id',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'website_url',
                                            'label' => 'Website URL',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'title',
                                            'label' => 'Title',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'description',
                                            'label' => 'Description',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'country',
                                            'label' => 'Country',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'city',
                                            'label' => 'City',
                                            'rules' => 'required'
                                         ),
                                    array(
                                            'field' => 'type',
                                            'label' => 'Type',
                                            'rules' => 'required'
                                         )
                                    )


               );
