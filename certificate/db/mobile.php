$addons = array(
    
    "mod_certificate" => array(
        "handlers" => array( // Different places where the add-on will display content.
            'coursecertificate' => array( // Handler unique name (can be anything)
                'displaydata' => array(
                    'title' => 'pluginname',
                    'icon' => '',
                    'class' => '',
                ),
                'delegate' => 'CoreMainMenuDelegate', // Delegate (where to display the link to the add-on)
                'method' => 'mobile_course_view', // Main function in \mod_certificate\output\mobile
                'offlinefunctions' => array(
                    'mobile_course_view' => array(),
                    'mobile_issues_view' => array(),
                ), // Function needs caching for offline.
            )
        ),
        'lang' => array(
            array('pluginname', 'certificate'),
            array('summaryofattempts', 'certificate'),
            array('getcertificate', 'certificate'),
            array('requiredtimenotmet', 'certificate'),
            array('viewcertificateviews', 'certificate')
        )
    )
);