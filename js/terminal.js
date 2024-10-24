var firebaseConfig = {
    apiKey: "AIzaSyCJhLo__GsvoEcP3Tp8G5jAhMo0OLPuBec",
    authDomain: "jcubic-1500107003772.firebaseapp.com",
    databaseURL: "https://jcubic-1500107003772.firebaseio.com",
    projectId: "jcubic-1500107003772",
    storageBucket: "jcubic-1500107003772.appspot.com",
    messagingSenderId: "1005897028349",
    appId: "1:1005897028349:web:fc2d0f5524864d5d17e494"
};
firebase.initializeApp(firebaseConfig);
var database = firebase.database();

const lf = new Intl.ListFormat('en');

const directories = {
    education: [
        '\n[[i;white;]education]',

        '* <a href="https://en.wikipedia.org/wiki/Kielce_University_of_Technology">Kielce University of Technology</a> <yellow>"Computer Science"</yellow> 2002-2007 / 2011-2014',
        '* <a href="https://www.wikidata.org/wiki/Q9351662">Post-secondary</a> Electronic School <yellow>"Computer Systems"</yellow> 2000-2002',
        '* Electronic <a href="https://en.wikipedia.org/wiki/Technikum_(Polish_education)">Technikum</a> with major <yellow>"RTV"</yellow> 1995-2000',
        ''
    ],
    projects: [
        '\n[[i;white;]Open Source projects]',
        [
            ['jQuery Terminal',
             'https://terminal.jcubic.pl',
             'library that adds terminal interface to websites'
            ],
            ['LIPS Scheme','https://lips.js.org', 'Scheme implementation in JavaScript'],
            ['Sysend.js','https://jcu.bi/sysend', 'Communication between open tabs'],
            ['Wayne','https://jcu.bi/wayne', 'Pure in browser HTTP requests'],
            ['Koduj','https://koduj.org/', 'Teaching project'],
            ['Gaiman','https://jcu.bi/gaiman', 'Programming language'],
            ['jQuery Splitter','https://jcu.bi/splitter', 'UI Component'],
            ['Tagger','https://jcu.bi/tagger', 'Tag Editor'],
            ['GIT Terminal', 'https://jcu.bi/git', 'Web-based Terminal with git commands'],
            ['ChatGPT bookmark','https://jcu.bi/chat-gpt', 'Bookmark to save chatGPT conversations'],
            ['Leash','https://leash.jcubic.pl/', 'Web Shell']
        ].map(([name, url, description = '']) => {
            return `* <a href="${url}">${name}</a> &mdash; <white>${description}</white>`;
        }),
        ''
    ].flat(),
    hacks: [
         '\n[[i;white;]hacks]',
        `* <a href="https://jcu.bi/react-in-terminal">React Application inside jQuery Terminal</a>`,
        `* <a href="https://jcu.bi/browser-server">How to create Web Server in Browser</a>`,
        `* <a href="https://jcu.bi/css-image">How I've created Photo in single div CSS</a>`,
        `* <a href="https://jcu.bi/react-sw">React Application inside Service Worker</a>`,
        `* <a href="https://jcu.bi/terminal-camera">Display Camera stream, using characters on screen</a>`,
        `* <a href="https://jcu.bi/ascii-tetris">ASCII Tetris</a>`,
        `* <a href="https://jcu.bi/ascii-snake">ASCII Snake</a>`,
        `* <a href="https://jcu.bi/sixel">Render Sixel iamges on jQuery Terminal</a>`,
        `* <a href="https://jcu.bi/json-css">Controlling Paint Worklet with JSON in CSS</a>`,
        `* <a href="https://jcu.bi/syntax">Source code Syntax Highlighting using Wayne</a>`,
        `* <a href="https://jcu.bi/serverless-chat">Chat without the server</a>`,
        ''
    ],
    skills: [
        '\n[[i;white;]languages]',

        [
            'JavaScript',
            'SVG',
            'TypeScript',
            'Python',
            'SQL',
            'PHP',
            'R',
            'Bash',
            'Scheme (lisp)'
        ].map(lang => `* <yellow>${lang}</yellow>`),

        '\n[[i;white;]libraries]',
        [
            'React.js',
            'React Native',
            'Redux',
            'Node.js',
            'Prisma',
            'Jest',
        ].map(lib => `* <green>${lib}</green>`),

        '\n[[i;white;]tools]',
        [
            'Docker',
            'git',
            'GNU/Linux',
            'Inkscape'
        ].map(lib => `* <blue>${lib}</blue>`),
        ''
    ].flat()
};

const root = '~';
let cwd = root;

// different colors
$.terminal.xml_formatter.tags.blue = (attrs) => `[[;#55F;;${attrs.class}]`;
$.terminal.xml_formatter.tags.green = (attrs) => `[[;#44D544;;${attrs.class}]`;
$.terminal.xml_formatter.tags.white = (attrs) => `[[;white;;${attrs.class}]`;

$.terminal.xml_formatter.tags.span

function prompt() {
    return `$<blue>${cwd}</blue>> `;
}

const dirs = Object.keys(directories);


const commands = {
    help() {
        const cmd = Object.keys(commands).map(cmd => `<white class="command">${cmd}</white>`);
        const list = lf.format(cmd);
        this.echo(`available commands: ${list}`);
    },
    chat() {
        firebase_chat(term, 'chat');
    },
    ls(dir = null) {
        if (dir) {
            if (dir.startsWith('~/')) {
                const path = dir.substring(2);
                const dirs = path.split('/');
                console.log(dirs);
                if (dirs.length > 1) {
                    this.error('Invalid directory');
                } else {
                    const dir = dirs[0];
                    this.echo(directories[dir].join('\n'));
                }
            } else if (cwd === root) {
                if (dir in directories) {
                    this.echo(directories[dir].join('\n'));
                } else {
                    this.error('Invalid directory');
                }
            } else {
                this.error('Invalid directory');
            }
        } else if (cwd === root) {
            this.echo(dirs.map(dir => `<blue class="directory">${dir}</blue>`).join('\n'));
        } else {
            const dir = cwd.substring(2);
            this.echo(directories[dir].join('\n'));
        }
    },
    cd(dir = null) {
        if (dir === null || (dir === '..' && cwd !== root)) {
            cwd = root;
        } else if (dir.startsWith('~/') && dirs.includes(dir.substring(2))) {
            cwd = dir;
        } else if (dirs.includes(dir)) {
            cwd = root + '/' + dir;
        } else {
            this.error('Wrong directory');
        }
    },
    record(arg = null) {
        if (arg == 'start') {
            term.history_state(true);
        } else if (arg == 'stop') {
            term.history_state(false);
        } else {
            term.echo('save commands in url hash so you can share the link\n\n' +
                      'usage: record [stop|start]');
        }
    },
    reset() {
        cwd = root;
        this.clear();
    }
};


$(function() {
    window.term = $('#term > div').terminal([commands, function(command) {
        const { name } = $.terminal.split_command(command);
        if (dirs.includes(name)) {
            this.echo(`<yellow>${name} is a directory. Try <white class="command">cd ${name}</white> command!</yellow>`);
        } else {
            this.error(`Command '${name}' Not Found!`);
        }
    }], {
        greetings: false,
        completion(string) {
            const { name, rest } = $.terminal.parse_command(this.get_command());
            if (['cd', 'ls'].includes(name)) {
                if (rest.startsWith('~/')) {
                    return dirs.map(dir => `~/${dir}`);
                }
                if (cwd === root) {
                    return dirs;
                }
            }
            return Object.keys(commands);
        },
        keymap: {
            ENTER(e, origin) {
                const command = this.get_command();
                _paq.push(['trackEvent', 'REPL', 'command', command]);
                origin();
            }
        },
        execHash: true,
        checkArity: false,
        prompt
    });

    term.on('click', '.command', function() {
        term.exec($(this).text());
    });

    term.on('click', '.directory', function() {
        const dir = $(this).text();
        term.exec(`cd ~/${dir}`);
    });

});
