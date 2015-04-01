module.exports = (function () {

    'use strict';

    return {
        author: {
            email: 'manovotny@gmail.com',
            name: 'Michael Novotny',
            url: 'http://manovotny.com',
            username: 'manovotny'
        },
        files: {
            browserify: 'bundle'
        },
        paths: {
            curl: 'curl_downloads',
            source: 'src',
            translations: 'lang'
        },
        project: {
            composer: {
                name: 'manovotny/wp-disable-comments',
                type: 'library' // Should be `library` or `project`.
            },
            description: 'Automatically disables comments on all posts and pages.',
            git: 'git://github.com/manovotny/wp-disable-comments.git',
            name: 'WP Disable Comments',
            slug: 'wp-disable-comments',
            type: 'plugin', // Should be `plugin` or `theme`.
            url: 'https://github.com/manovotny/wp-disable-comments',
            version: '0.0.0'
        }
    };

}());
