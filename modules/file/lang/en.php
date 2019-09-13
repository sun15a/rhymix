<?php
$lang->file = 'File';
$lang->file_management = 'File Management';
$lang->file_upload = 'File Upload';
$lang->file_upload_config = 'File Upload Settings';
$lang->file_download_config = 'File Download Settings';
$lang->file_other_config = 'Other Settings';
$lang->file_name = 'File Name';
$lang->file_size = 'File Size';
$lang->download_count = 'Number of Downloads';
$lang->status = 'Status';
$lang->is_valid = 'Valid';
$lang->is_stand_by = 'Stand by';
$lang->file_list = 'Attachment List';
$lang->allow_outlink = 'Allow External Link to Download URL';
$lang->allow_outlink_site = 'Allowed Websites';
$lang->allow_outlink_format = 'Allowed Formats';
$lang->allowed_filesize = 'Maximum File Size';
$lang->allowed_attach_size = 'Maximum Attachments';
$lang->allowed_filetypes = 'Allowed extentsions';
$lang->max_image_size = 'Maximum Image Size';
$lang->max_image_size_action_nothing = 'If exceeded, do nothing';
$lang->max_image_size_action_block = 'If exceeded, block upload';
$lang->max_image_size_action_resize = 'If exceeded, resize automatically';
$lang->max_image_size_admin = 'Also apply to administrator';
$lang->image_resize_quality = 'Quality';
$lang->image_autoconv = 'Auto-Convert Image';
$lang->image_autoconv_bmp2jpg = 'BMP → JPG';
$lang->image_autoconv_png2jpg = 'PNG → JPG';
$lang->image_autoconv_webp2jpg = 'WebP → JPG';
$lang->image_autoconv_gif2mp4 = 'GIF → MP4';
$lang->ffmpeg_path = 'Path to ffmpeg';
$lang->image_autorotate = 'Auto-Rotate Image';
$lang->inline_download_format = 'Open in current window';
$lang->inline_download_image = 'Image';
$lang->inline_download_audio = 'Audio';
$lang->inline_download_video = 'Video';
$lang->inline_download_text = 'Text (except HTML)';
$lang->inline_download_pdf = 'PDF';
$lang->file_save_changelog = 'Save changelog';
$lang->use_default_file_config = 'Use Default Settings';
$lang->about_use_default_file_config = 'Follow the default settings from the File module.';
$lang->about_inline_download_format = 'Selected types of files will be opened in the current window instead of a download dialog when a user clicks the download link.';
$lang->enable_download_group = 'Downloadable Groups';
$lang->about_allow_outlink = 'Allow other websites to link directly to your download URLs.<br />Rhymix does not control links to image files that can be embedded directly in a document.<br />in order to block external links to such images, you may need to modify your web server configuration.';
$lang->about_allow_outlink_format = 'These file formats will always be allowed.<br />Please use a comma (,) to separate items: e.g. doc, zip, pdf';
$lang->about_allow_outlink_site = 'These referers will always be allowed.<br />Please enter one full address per line: e.g. https://www.rhymix.org/';
$lang->about_allowed_filesize = 'You can limit the size of each attached file.<br />Administrators are limited to this setting or the limit set in the <a href="%s" target="_blank">file module</a>, whichever is greater.';
$lang->about_allowed_attach_size = 'You can limit the total size of all attached files in one document.<br />Administrators are limited to this setting or the limit set in the <a href="%s" target="_blank">file module</a>, whichever is greater.';
$lang->about_allowed_filesize_global = 'This is the global limit on the size of each attachment.';
$lang->about_allowed_attach_size_global = 'This is the global limit on the combined size of all attachments in one document.';
$lang->about_allowed_size_limits = 'The file size will be limited to the value set in php.ini (%sB) in IE9 and below and older Android browsers.';
$lang->about_allowed_filetypes = 'Rhymix no longer uses the old *.* syntax. Simply list the extensions you wish to allow.<br />Please use a comma (,) to separate items: e.g. doc, zip, pdf';
$lang->about_max_image_size = 'You can limit the maximum width and/or height of uploaded images.<br />This limit does not apply to files uploaded by the administrator.';
$lang->about_image_autoconv = 'Automatically convert types of images that often cause trouble or waste disk space into other types.<br />This also works for WebP images that incorrectly have the JPG extension.<br />If enabled, this feature also applies to images uploaded by the administrator.';
$lang->about_image_autoconv_mp4 = 'Automatically convert animated GIF images into MP4 videos to save storage and bandwidth.<br />Videos may not play properly in older browsers.';
$lang->about_image_autorotate = 'Automatically correct images that are rotated by mobile devices.<br />If enabled, this feature also applies to images uploaded by the administrator.';
$lang->about_save_changelog = 'Keep a log of new and deleted files in the database.';
$lang->cmd_delete_checked_file = 'Delete Selected Item(s)';
$lang->cmd_move_to_document = 'Move to Document';
$lang->cmd_download = 'Download';
$lang->msg_not_permitted_download = 'You do not have a permission to download.';
$lang->msg_file_cart_is_null = 'Please select a file(s) to delete.';
$lang->msg_checked_file_is_deleted = '%d attachment(s) was(were) deleted.';
$lang->msg_exceeds_limit_size = 'This file exceeds the attachment limit.';
$lang->msg_exceeds_max_image_size = 'This image is too large. Images must be no larger than %dx%dpx.';
$lang->msg_exceeds_max_image_width = 'This image is too large. The maximum permitted width is %dpx.';
$lang->msg_exceeds_max_image_height = 'This image is too large. The maximum permitted height is %dpx.';
$lang->msg_file_not_found = 'Could not find requested file.';
$lang->msg_file_key_expired = 'This download link is expired. Please initiate the download again.';
$lang->file_search_target_list['filename'] = 'File Name';
$lang->file_search_target_list['filesize_more'] = 'File Size(byte, more)';
$lang->file_search_target_list['filesize_mega_more'] = 'File Size(mbyte, more)';
$lang->file_search_target_list['filesize_less'] = 'File Size(byte, less)';
$lang->file_search_target_list['filesize_mega_less'] = 'File Size(Mb, less)';
$lang->file_search_target_list['download_count'] = 'Downloads(more)';
$lang->file_search_target_list['user_id'] = 'User UD';
$lang->file_search_target_list['user_name'] = 'User Name';
$lang->file_search_target_list['nick_name'] = 'Nickname';
$lang->file_search_target_list['regdate'] = 'Registered Date';
$lang->file_search_target_list['ipaddress'] = 'IP Address';
$lang->file_search_target_list['isvalid'] = 'Status';
$lang->msg_not_allowed_outlink = 'It is not allowed to download files from sites other than this.';
$lang->msg_not_permitted_create = 'Failed to create a file or directory.';
$lang->msg_file_upload_error = 'An error has occurred during uploading.';
$lang->msg_upload_invalid_chunk = 'An error has occurred during chunked uploading.';
$lang->msg_32bit_max_2047mb = 'On 32-bit servers, the file size limit cannot exceed 2047MB.';
$lang->no_files = 'No Files';
$lang->file_manager = 'Manage selected files';
$lang->selected_file = 'Selected files';
