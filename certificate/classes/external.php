       if (has_capability('local/certificate:view', $context)) {
                    list($module['intro'], $module['introformat']) =
                        external_format_text($certificate->intro, $certificate->introformat, $context->id,
                                                'local_certificate', 'intro', $certificate->id);
                                                'local_certificate', 'intro');
                    // Check certificate requeriments for current user.
                    $viewablefields[] = 'requiredtime';