<?php

return [
    'custom_fields'		        => 'Bidang Tersuai',
    'manage'                    => 'Manage',
    'field'		                => 'Padang',
    'about_fieldsets_title'		=> 'Mengenai Fieldsets',
    'about_fieldsets_text'		=> 'Fieldsets membolehkan anda membuat kumpulan bidang tersuai yang sering digunakan semula digunakan untuk jenis model aset tertentu.',
    'custom_format'             => 'Custom Regex format...',
    'encrypt_field'      	        => 'Sulitkan nilai medan ini dalam pangkalan data',
    'encrypt_field_help'      => 'AMARAN: Menyulitkan medan menjadikannya tidak dapat ditemui.',
    'encrypted'      	        => 'Disulitkan',
    'fieldset'      	        => 'Fieldset',
    'qty_fields'      	      => 'Qty Fields',
    'fieldsets'      	        => 'Fieldsets',
    'fieldset_name'           => 'Nama Fieldset',
    'field_name'              => 'Nama Field',
    'field_values'            => 'Nilai Field',
    'field_values_help'       => 'Tambah pilihan pilihan, satu setiap baris. Barisan kosong selain baris pertama akan diabaikan.',
    'field_element'           => 'Borang Elemen',
    'field_element_short'     => 'Elemen',
    'field_format'            => 'Format',
    'field_custom_format'     => 'Format Tersuai',
    'field_custom_format_help'     => 'Medan ini membolehkan anda menggunakan ungkapan regex untuk pengesahan. Ia harus bermula dengan "regex:" - sebagai contoh, untuk mengesahkan bahawa nilai medan khusus mengandungi IMEI yang sah (15 angka numerik), anda akan menggunakan <code>regex: / ^[0-9]{15}$ /</code>.',
    'required'   		          => 'Diperlukan',
    'req'   		              => 'Req.',
    'used_by_models'   		    => 'Digunakan Oleh Model',
    'order'   		            => 'Perintah',
    'create_fieldset'         => 'Fieldset baru',
    'update_fieldset'         => 'Update Fieldset',
    'fieldset_does_not_exist'   => 'Fieldset :id does not exist',
    'fieldset_updated'         => 'Fieldset updated',
    'create_fieldset_title' => 'Create a new fieldset',
    'create_field'            => 'Padang Tersuai Baru',
    'create_field_title' => 'Create a new custom field',
    'value_encrypted'      	        => 'Nilai medan ini disulitkan dalam pangkalan data. Hanya pengguna admin sahaja yang dapat melihat nilai yang disahkrit',
    'show_in_email'     => 'Sertakan nilai medan ini dalam e-mel semak keluar yang dihantar kepada pengguna? Medan yang disulitkan tidak boleh dimasukkan ke dalam e-mel',
    'show_in_email_short' => 'Include in emails',
    'help_text' => 'Help Text',
    'help_text_description' => 'This is optional text that will appear below the form elements while editing an asset to provide context on the field.',
    'about_custom_fields_title' => 'About Custom Fields',
    'about_custom_fields_text' => 'Custom fields allow you to add arbitrary attributes to assets.',
    'add_field_to_fieldset' => 'Add Field to Fieldset',
    'make_optional' => 'Required - click to make optional',
    'make_required' => 'Optional - click to make required',
    'reorder' => 'Reorder',
    'db_field' => 'DB Field',
    'db_convert_warning' => 'WARNING. This field is in the custom fields table as <code>:db_column</code> but should be <code>:expected</code>.',
    'is_unique' => 'This value must be unique across all assets',
    'unique' => 'Unique',
    'display_in_user_view' => 'Allow the checked out user to view these values in their View Assigned Assets page',
    'display_in_user_view_table' => 'Visible to User',
    'auto_add_to_fieldsets' => 'Automatically add this to every new fieldset',
    'add_to_preexisting_fieldsets' => 'Add to any existing fieldsets',
    'show_in_listview' => 'Show in list views by default. Authorized users will still be able to show/hide via the column selector',
    'show_in_listview_short' => 'Show in lists',
    'show_in_requestable_list_short' => 'Show in requestable assets list',
    'show_in_requestable_list' => 'Show value in requestable assets list. Encrypted fields will not be shown',
    'encrypted_options' => 'This field is encrypted, so some display options will not be available.',
    'display_checkin' => 'Display in checkin forms',
    'display_checkout' => 'Display in checkout forms',
    'display_audit' => 'Display in audit forms',
    'types' => [
        'text' => 'Text Box',
        'listbox' => 'List Box',
        'textarea' => 'Textarea (multi-line)',
        'checkbox' => 'Checkbox',
        'radio' => 'Radio Buttons',
    ],
];
