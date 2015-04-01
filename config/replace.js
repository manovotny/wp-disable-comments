module.exports = (function () {

    'use strict';

    return {
        author: {
            email: 'manovotny@gmail.com',
            name: 'Michael Novotny',
            url: 'http://manovotny.com',
            username: 'manovotny'
        },
        project: {
            composer: {
                name: 'manovotny/wp-disable-comments',
                type: 'library'
            },
            description: 'Automatically disables comments on all posts and pages.',
            git: 'git://github.com/manovotny/wp-disable-comments.git',
            name: 'WP Disable Comments',
            slug: 'wp-disable-comments',
            url: 'https://github.com/manovotny/wp-disable-comments',
            version: '1.0.0'
        },
        translations: {
            domain: 'wp-disable-comments',
            path: 'lang'
        }
    };

}());
