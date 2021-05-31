<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('cy', array (
  'validators' => 
  array (
    'This value should be false.' => 'Dylid bod y gwerth hwn yn ffug.',
    'This value should be true.' => 'Dylid bod y gwerth hwn yn wir.',
    'This value should be of type {{ type }}.' => 'Dylid bod y gwerth hwn bod o fath {{ type }}.',
    'This value should be blank.' => 'Dylid bod y gwerth hwn yn wag.',
    'The value you selected is not a valid choice.' => 'Nid yw\'r gwerth â ddewiswyd yn ddilys.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Rhaid dewis o leiaf {{ limit }} opsiwn.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Rhaid dewis dim mwy na {{ limit }} opsiwn.',
    'One or more of the given values is invalid.' => 'Mae un neu fwy o\'r gwerthoedd a roddwyd yn annilys.',
    'This field was not expected.' => 'Nid oedd disgwyl y maes hwn.',
    'This field is missing.' => 'Mae\'r maes hwn ar goll.',
    'This value is not a valid date.' => 'Nid yw\'r gwerth yn ddyddiad dilys.',
    'This value is not a valid datetime.' => 'Nid yw\'r gwerth yn datetime dilys.',
    'This value is not a valid email address.' => 'Nid yw\'r gwerth yn gyfeiriad ebost dilys.',
    'The file could not be found.' => 'Ni ddarganfyddwyd y ffeil.',
    'The file is not readable.' => 'Ni ellir darllen y ffeil.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Mae\'r ffeil yn rhy fawr ({{ size }} {{ suffix }}). Yr uchafswm â ganiateir yw {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Nid yw math mime y ffeil yn ddilys ({{ type }}). Dyma\'r mathau â ganiateir {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Dylai\'r gwerth hwn fod yn {{ limit }} neu lai.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Mae\'r gwerth hwn rhy hir. Dylai gynnwys {{ limit }} nodyn cyfrifiadurol neu lai.',
    'This value should be {{ limit }} or more.' => 'Dylai\'r gwerth hwn fod yn {{ limit }} neu fwy.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Mae\'r gwerth hwn yn rhy fyr. Dylai gynnwys {{ limit }} nodyn cyfrifiadurol neu fwy.',
    'This value should not be blank.' => 'Ni ddylai\'r gwerth hwn fod yn wag.',
    'This value should not be null.' => 'Ni ddylai\'r gwerth hwn fod yn null.',
    'This value should be null.' => 'Dylai\'r gwerth fod yn null.',
    'This value is not valid.' => 'Nid yw\'r gwerth hwn yn ddilys.',
    'This value is not a valid time.' => 'Nid yw\'r gwerth hwn yn amser dilys.',
    'This value is not a valid URL.' => 'Nid yw\'r gwerth hwn yn URL dilys.',
    'The two values should be equal.' => 'Rhaid i\'r ddau werth fod yn gyfystyr a\'u gilydd.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Mae\'r ffeil yn rhy fawr. Yr uchafswm â ganiateir yw {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Mae\'r ffeil yn rhy fawr.',
    'The file could not be uploaded.' => 'Methwyd ag uwchlwytho\'r ffeil.',
    'This value should be a valid number.' => 'Dylai\'r gwerth hwn fod yn rif dilys.',
    'This file is not a valid image.' => 'Nid yw\'r ffeil hon yn ddelwedd dilys.',
    'This is not a valid IP address.' => 'Nid yw hwn yn gyfeiriad IP dilys.',
    'This value is not a valid language.' => 'Nid yw\'r gwerth hwn yn iaith ddilys.',
    'This value is not a valid locale.' => 'Nid yw\'r gwerth hwn yn locale dilys.',
    'This value is not a valid country.' => 'Nid yw\'r gwerth hwn yn wlad dilys.',
    'This value is already used.' => 'Mae\'r gwerth hwn eisoes yn cael ei ddefnyddio.',
    'The size of the image could not be detected.' => 'Methwyd â darganfod maint y ddelwedd.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Mae lled y ddelwedd yn rhy fawr ({{ width }}px). Y lled mwyaf â ganiateir yw {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Mae lled y ddelwedd yn rhy fach ({{ width }}px). Y lled lleiaf â ganiateir yw {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Mae uchder y ddelwedd yn rhy fawr ({{ width }}px). Yr uchder mwyaf â ganiateir yw {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Mae uchder y ddelwedd yn rhy fach ({{ width }}px). Yr uchder lleiaf â ganiateir yw {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'Dylaid bod y gwerth hwn yn gyfrinair presenol y defnyddiwr.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Dylai\'r gwerth hwn fod yn union {{ limit }} nodyn cyfrifiadurol o hyd.',
    'The file was only partially uploaded.' => 'Dim ond rhan o\'r ffeil ag uwchlwythwyd.',
    'No file was uploaded.' => 'Ni uwchlwythwyd unrhyw ffeil.',
    'No temporary folder was configured in php.ini.' => 'Nid oes ffolder dros-dro wedi\'i gosod yn php.ini.',
    'Cannot write temporary file to disk.' => 'Methwyd ag ysgrifennu\'r ffeil dros-dro ar ddisg.',
    'A PHP extension caused the upload to fail.' => 'Methwyd ag uwchlwytho oherwydd ategyn PHP.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Dylai\'r casgliad hwn gynnwys {{ limit }} elfen neu fwy.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Dylai\'r casgliad hwn gynnwys {{ limit }} elfen neu lai.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Dylai\'r casgliad hwn gynnwys union {{ limit }} elfen.',
    'Invalid card number.' => 'Nid oedd rhif y cerdyn yn ddilys.',
    'Unsupported card type or invalid card number.' => 'Unai ni dderbynir y math yna o gerdyn, neu nid yw rhif y cerdyn yn ddilys.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Nid yw hwn yn Rhif Cyfrif Banc Rhyngwladol (IBAN) dilys.',
    'This value is not a valid ISBN-10.' => 'Nid yw\'r gwerth hwn yn ISBN-10 dilys.',
    'This value is not a valid ISBN-13.' => 'Nid yw\'r gwerth hwn yn ISBN-13 dilys.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Nid yw\'r gwerth hwn yn Rhif ISBN-10 dilys nac yn ISBN-13 dilys.',
    'This value is not a valid ISSN.' => 'Nid yw\'r gwerth hwn yn ISSN dilys.',
    'This value is not a valid currency.' => 'Nid yw\'r gwerth hwn yn arian dilys.',
    'This value should be equal to {{ compared_value }}.' => 'Dylai\'r gwerth hwn fod yn gyfartal â {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'Dylai\'r gwerth hwn fod yn fwy na {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Dylai\'r gwerth hwn fod yn fwy na neu\'n hafal i {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Dylai\'r gwerth hwn fod yn union yr un fath â {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Dylai\'r gwerth hwn fod yn llai na {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Dylai\'r gwerth hwn fod yn llai na neu\'n hafal i {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'Ni ddylai\'r gwerth hwn fod yn hafal i {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Ni ddylai\'r gwerth hwn fod yn union yr un fath â {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Mae\'r gymhareb delwedd yn rhy fawr ({{ ratio }}). Y gymhareb uchaf a ganiateir yw {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Mae\'r gymhareb delwedd yn rhy fach ({{ ratio }}). Y gymhareb isaf a ddisgwylir yw {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Mae\'r ddelwedd yn sgwâr ({{ width }}x{{ height }}px). Ni chaniateir delweddau sgwâr.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Mae\'r ddelwedd mewn fformat tirlun ({{ width }}x{{ height }}px). Ni chaniateir delweddau mewn fformat tirlun.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Mae\'r ddelwedd mewn fformat portread ({{ width }}x{{ height }}px). Ni chaniateir delweddau mewn fformat portread.',
    'An empty file is not allowed.' => 'Ni chaniateir ffeil wag.',
    'The host could not be resolved.' => 'Ni fu modd datrys y gwesteiwr.',
    'This value does not match the expected {{ charset }} charset.' => 'Nid yw\'r gwerth hwn yn cyfateb â\'r {{ charset }} set nodau ddisgwyliedig.',
    'This is not a valid Business Identifier Code (BIC).' => 'Nid yw hwn yn God Adnabod Busnes (BIC) dilys.',
    'Error' => 'Gwall',
    'This is not a valid UUID.' => 'Nid yw hyn yn UUID dilys.',
    'This value should be a multiple of {{ compared_value }}.' => 'Dylai\'r gwerth hwn fod yn luosrif o {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'Nid yw\'r Cod Adnabod Busnes (BIC) hwn yn gysylltiedig ag IBAN {{ iban }}.',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators+intl-icu' => 
  array (
    'post.slug_unique' => 'This title was already used in another blog post, but they must be unique.',
    'post.blank_summary' => 'Give your post a summary!',
    'post.blank_content' => 'Your post should have some content!',
    'post.too_short_content' => 'Post content is too short ({ limit } characters minimum)',
    'post.too_many_tags' => 'Too many tags (add { limit } tags or less)',
    'comment.blank' => 'Please don\'t leave your comment blank!',
    'comment.too_short' => 'Comment is too short ({ limit } characters minimum)',
    'comment.too_long' => 'Comment is too long ({ limit } characters maximum)',
    'comment.is_spam' => 'The content of this comment is considered spam.',
  ),
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'This field was not expected.' => 'This field was not expected.',
    'This field is missing.' => 'This field is missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user\'s current password.' => 'This value should be the user\'s current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini, or the configured folder does not exist.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'An empty file is not allowed.' => 'An empty file is not allowed.',
    'The host could not be resolved.' => 'The host could not be resolved.',
    'This value does not match the expected {{ charset }} charset.' => 'This value does not match the expected {{ charset }} charset.',
    'This is not a valid Business Identifier Code (BIC).' => 'This is not a valid Business Identifier Code (BIC).',
    'Error' => 'Error',
    'This is not a valid UUID.' => 'This is not a valid UUID.',
    'This value should be a multiple of {{ compared_value }}.' => 'This value should be a multiple of {{ compared_value }}.',
    'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.' => 'This Business Identifier Code (BIC) is not associated with IBAN {{ iban }}.',
    'This value should be valid JSON.' => 'This value should be valid JSON.',
    'This collection should contain only unique elements.' => 'This collection should contain only unique elements.',
    'This value should be positive.' => 'This value should be positive.',
    'This value should be either positive or zero.' => 'This value should be either positive or zero.',
    'This value should be negative.' => 'This value should be negative.',
    'This value should be either negative or zero.' => 'This value should be either negative or zero.',
    'This value is not a valid timezone.' => 'This value is not a valid timezone.',
    'This password has been leaked in a data breach, it must not be used. Please use another password.' => 'This password has been leaked in a data breach, it must not be used. Please use another password.',
    'This value should be between {{ min }} and {{ max }}.' => 'This value should be between {{ min }} and {{ max }}.',
    'This value is not a valid hostname.' => 'This value is not a valid hostname.',
    'The number of elements in this collection should be a multiple of {{ compared_value }}.' => 'The number of elements in this collection should be a multiple of {{ compared_value }}.',
    'This value should satisfy at least one of the following constraints:' => 'This value should satisfy at least one of the following constraints:',
    'Each element of this collection should satisfy its own set of constraints.' => 'Each element of this collection should satisfy its own set of constraints.',
    'This value is not a valid International Securities Identification Number (ISIN).' => 'This value is not a valid International Securities Identification Number (ISIN).',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
    'This value is not a valid HTML5 color.' => 'This value is not a valid HTML5 color.',
    'Please enter a valid birthdate.' => 'Please enter a valid birthdate.',
    'The selected choice is invalid.' => 'The selected choice is invalid.',
    'The collection is invalid.' => 'The collection is invalid.',
    'Please select a valid color.' => 'Please select a valid color.',
    'Please select a valid country.' => 'Please select a valid country.',
    'Please select a valid currency.' => 'Please select a valid currency.',
    'Please choose a valid date interval.' => 'Please choose a valid date interval.',
    'Please enter a valid date and time.' => 'Please enter a valid date and time.',
    'Please enter a valid date.' => 'Please enter a valid date.',
    'Please select a valid file.' => 'Please select a valid file.',
    'The hidden field is invalid.' => 'The hidden field is invalid.',
    'Please enter an integer.' => 'Please enter an integer.',
    'Please select a valid language.' => 'Please select a valid language.',
    'Please select a valid locale.' => 'Please select a valid locale.',
    'Please enter a valid money amount.' => 'Please enter a valid money amount.',
    'Please enter a number.' => 'Please enter a number.',
    'The password is invalid.' => 'The password is invalid.',
    'Please enter a percentage value.' => 'Please enter a percentage value.',
    'The values do not match.' => 'The values do not match.',
    'Please enter a valid time.' => 'Please enter a valid time.',
    'Please select a valid timezone.' => 'Please select a valid timezone.',
    'Please enter a valid URL.' => 'Please enter a valid URL.',
    'Please enter a valid search term.' => 'Please enter a valid search term.',
    'Please provide a valid phone number.' => 'Please provide a valid phone number.',
    'The checkbox has an invalid value.' => 'The checkbox has an invalid value.',
    'Please enter a valid email address.' => 'Please enter a valid email address.',
    'Please select a valid option.' => 'Please select a valid option.',
    'Please select a valid range.' => 'Please select a valid range.',
    'Please enter a valid week.' => 'Please enter a valid week.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
    'Too many failed login attempts, please try again later.' => 'Too many failed login attempts, please try again later.',
    'Invalid or expired login link.' => 'Invalid or expired login link.',
  ),
  'messages+intl-icu' => 
  array (
    'note' => 'NOTE',
    'tip' => 'TIP',
    'not_available' => 'Not available',
    'mit_license' => 'MIT License',
    'http_error.name' => 'Error {status_code, number}',
    'http_error.description' => 'There was an unknown error (HTTP {status_code, number}) that prevented to complete your request.',
    'http_error.suggestion' => 'Try loading this page again in some minutes or <a href="{url}">go back to the homepage</a>.',
    'http_error_403.description' => 'You don\'t have permission to access to this resource.',
    'http_error_403.suggestion' => 'Ask your manager or system administrator to grant you access to this resource.',
    'http_error_404.description' => 'We couldn\'t find the page you requested.',
    'http_error_404.suggestion' => 'Check out any misspelling in the URL or <a href="{url}">go back to the homepage</a>.',
    'http_error_500.description' => 'There was an internal server error.',
    'http_error_500.suggestion' => 'Try loading this page again in some minutes or <a href="{url}">go back to the homepage</a>.',
    'title.homepage' => 'Welcome to the <strong>Symfony Demo</strong> application',
    'title.source_code' => 'Source code used to render this page',
    'title.controller_code' => 'Controller code',
    'title.twig_template_code' => 'Twig template code',
    'title.login' => 'Secure Sign in',
    'title.post_list' => 'Post List',
    'title.edit_post' => 'Edit post #{id, number}',
    'title.add_comment' => 'Add a comment',
    'title.comment_error' => 'There was an error publishing your comment',
    'title.edit_user' => 'Edit user',
    'title.change_password' => 'Change password',
    'action.show' => 'Show',
    'action.show_post' => 'Show post',
    'action.show_code' => 'Show code',
    'action.edit' => 'Edit',
    'action.edit_post' => 'Edit post',
    'action.save' => 'Save changes',
    'action.delete_post' => 'Delete post',
    'delete_post_modal.title' => 'Are you sure you want to delete this post?',
    'delete_post_modal.body' => 'This action cannot be undone.',
    'label.delete_post' => 'Delete post',
    'label.cancel' => 'Cancel',
    'action.create_post' => 'Create a new post',
    'label.create_post' => 'Create post',
    'label.save_and_create_new' => 'Save and create new',
    'action.back_to_list' => 'Back to the post list',
    'action.publish_comment' => 'Publish comment',
    'action.sign_in' => 'Sign in',
    'action.browse_app' => 'Browse application',
    'action.browse_admin' => 'Browse backend',
    'action.edit_user' => 'Edit user',
    'action.change_password' => 'Change password',
    'action.close' => 'Close',
    'label.title' => 'Title',
    'label.author' => 'Author',
    'label.author_email' => 'Author email',
    'label.username' => 'Username',
    'label.fullname' => 'Fullname',
    'label.email' => 'Email',
    'label.password' => 'Password',
    'label.current_password' => 'Current password',
    'label.new_password' => 'New password',
    'label.new_password_confirm' => 'Confirm password',
    'label.role' => 'Role',
    'label.content' => 'Content',
    'label.summary' => 'Summary',
    'label.published_at' => 'Published at',
    'label.tags' => 'Tags',
    'label.actions' => 'Actions',
    'title.post_new' => 'Post creation',
    'action.edit_contents' => 'Edit contents',
    'menu.toggle_nav' => 'Toggle navigation',
    'menu.choose_language' => 'Choose language',
    'menu.post_list' => 'Post list',
    'menu.back_to_blog' => 'Back to blog',
    'menu.homepage' => 'Homepage',
    'menu.admin' => 'Backend',
    'menu.user' => 'Account',
    'menu.logout' => 'Logout',
    'menu.rss' => 'Blog Posts RSS',
    'menu.search' => 'Search',
    'post.to_publish_a_comment' => 'to publish a comment',
    'post.num_comments' => '{count, plural, one {# comment} other {# comments}}',
    'post.commented_on' => 'commented on',
    'post.no_comments' => 'Be the first to comment on this post.',
    'post.no_posts_found' => 'No posts found.',
    'post.created_successfully' => 'Post created successfully!',
    'post.updated_successfully' => 'Post updated successfully!',
    'post.deleted_successfully' => 'Post deleted successfully!',
    'post.search_for' => 'Search for...',
    'post.search_no_results' => 'No results found',
    'user.updated_successfully' => 'User updated successfully!',
    'notification.comment_created' => 'Your post received a comment!',
    'notification.comment_created.description' => 'Your post "{title}" has received a new comment. You can read the comment by following <a href="{link}">this link</a>',
    'help.app_description' => 'This is a <strong>demo application</strong> built in the Symfony Framework to illustrate the recommended way of developing Symfony applications.',
    'help.show_code' => 'Click on this button to show the source code of the <strong>Controller</strong> and <strong>template</strong> used to render this page.',
    'help.browse_app' => 'Browse the <strong>public section</strong> of the demo application.',
    'help.browse_admin' => 'Browse the <strong>admin backend</strong> of the demo application.',
    'help.login_users' => 'Try either of the following users',
    'help.role_user' => 'regular user',
    'help.role_admin' => 'administrator',
    'help.reload_fixtures' => 'If these users don\'t work, reload application fixtures by running this command from the terminal:',
    'help.add_user' => 'If you want to create new users, run this other command:',
    'help.more_information' => 'For more information, check out the <a href="https://symfony.com/doc">Symfony doc</a>.',
    'help.post_summary' => 'Summaries can\'t contain Markdown or HTML contents; only plain text.',
    'help.post_publication' => 'Set the date in the future to schedule the blog post publication.',
    'help.post_content' => 'Use Markdown to format the blog post contents. HTML is allowed too.',
    'help.comment_content' => 'Comments not complying with our Code of Conduct will be moderated.',
    'info.change_password' => 'After changing your password, you will be logged out of the application.',
    'rss.title' => 'Symfony Demo blog',
    'rss.description' => 'Most recent posts published on the Symfony Demo blog',
    'paginator.previous' => 'Previous',
    'paginator.next' => 'Next',
    'paginator.current' => '(current)',
  ),
  'messages' => 
  array (
    'vich_uploader.form_label.delete_confirm' => 'Delete?',
    'vich_uploader.link.download' => 'Download',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);

return $catalogue;
