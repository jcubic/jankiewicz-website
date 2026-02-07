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

const projects = [
    ['jQuery Terminal', 'https://terminal.jcubic.pl', 'library that adds terminal interface to websites'],
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
];


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
        projects.map(([name, url, description = '']) => {
            return `* <a href="${url}" target="_blank">${name}</a> &mdash; <white>${description}</white>`;
        }),
        ''
    ].flat(),
    hacks: [
         '\n[[i;white;]hacks]',
        `* <a href="https://jcu.bi/react-in-terminal" target="_blank">React Application inside jQuery Terminal</a>`,
        `* <a href="https://jcu.bi/browser-server" target="_blank">How to create Web Server in Browser</a>`,
        `* <a href="https://jcu.bi/css-image" target="_blank">How I've created Photo in single div CSS</a>`,
        `* <a href="https://jcu.bi/react-sw" target="_blank">React Application inside Service Worker</a>`,
        `* <a href="https://jcu.bi/terminal-camera" target="_blank">Display Camera stream, using characters on screen</a>`,
        `* <a href="https://jcu.bi/ascii-tetris" target="_blank">ASCII Tetris</a>`,
        `* <a href="https://jcu.bi/ascii-snake" target="_blank">ASCII Snake</a>`,
        `* <a href="https://jcu.bi/sixel" target="_blank">Render Sixel images on jQuery Terminal</a>`,
        `* <a href="https://jcu.bi/json-css" target="_blank">Controlling Paint Worklet with JSON in CSS</a>`,
        `* <a href="https://jcu.bi/syntax" target="_blank">Source code Syntax Highlighting using Wayne</a>`,
        `* <a href="https://jcu.bi/serverless-chat" target="_blank">Chat without the server</a>`,
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

const home = (all = false) => {
    let result = dirs.map(dir => `<blue class="directory">${dir}</blue>`);
    result = result.concat(list_files(all).map(file => `<green class="command">${file.name}</green>`));
    return result.join('\n');
};

// ref: https://stackoverflow.com/a/60180035/387194
function random_date(from, to) {
    const fromTime = from.getTime();
    const toTime = to.getTime();
    return new Date(fromTime + Math.random() * (toTime - fromTime));
}

function pad_number(number, digits = 2) {
    return number.toString().padStart(digits, '0');
}

function pad_size(size, spaces = 7) {
    return size.toString().padStart(spaces, ' ');
}

function format_date(date) {
    const year = date.getFullYear();
    const month = date.getMonth() + 1;
    const day = date.getDate();
    return [year, pad_number(month), pad_number(day)].join('-');
}

function list_files(all = false) {
    if (all) {
        return files;
    }
    return files.filter(file => !file.name.startsWith('.'));
}

const home_detail = (human_readable = false, all = false) => {
    const from = new Date('2018-02-12');
    const to = new Date();
    const date = () => {
        return format_date(random_date(from, to));
    };
    function calcuate_size(number) {
        return human_readable ? pad_size(human_file_size(number), 4) : pad_size(number);
    }
    let result = dirs.map(dir => {
        const size = calcuate_size(4096);
        return `drwxr-xr-x. 1 kuba kuba ${size} ${date()} <blue class="directory">${dir}</blue>`;
    });
    result = result.concat(list_files(all).map(file => {
        const size = calcuate_size(file.size);
        return `-rwxr-xr-x. 1 kuba kuba ${size} ${date()} <green class="command">${file.name}</green>`;
    }));
    return result.join('\n');
};

const commands = {
    help(arg = null) {
        if (arg) {
            switch (arg) {
                case 'help':
                    return 'display help message';
                case '?':
                    return 'alias for help';
                case 'cat':
                    return 'prints the contents of the file';
                case 'chat':
                    return 'runs terminal chat';
                case '.dmr':
                    return 'prints Dennis Ritchie ANSI Art';
                case 'ls':
                    return 'lists files';
                case 'cd':
                    return 'change directory';
                case 'credits':
                    return 'displays tools used by the website';
                case 'record':
                    return 'saves commands in url hash, so you can share the link';
                case 'star-wars':
                    const link = 'https://pl.wikipedia.org/wiki/ASCII-Art';
                    return `play star wars movie as <a href="${link}">ASCII ` +
                           'art</a>. The command accepts one argument the nu' +
                           'mber which is a delay between frames. Default va' +
                           'lue is 50. Use smaller number to make the animat' +
                           'ion faster.';
                case 'blog':
                    return 'displays blog using less like command';
                case 'reset':
                    return 'resets the terminal to original state';
                default:
                    return 'Invalid command.';
            }
        }
        const cmd = public_commands.map(cmd => {
            return `<white class="command">${cmd}</white>`;
        });
        const list = lf.format(cmd);
        this.echo(`available commands:\n${list}`, { keepWords: true });
        this.echo('You can use &lt;TAB&gt; key to autocomplete');
        this.echo('In less (like with <white class="command">blog</white>) y' +
                  'ou can use `q` to exit and / to search.');
    },
    ['?']() {
        this.exec('help', { silent: true });
    },
    echo(...args) {
        this.echo(args.join(' '));
    },
    cat(file = null) {
        if (!file) {
            return this.read();
        }
        if (is_relative(file)) {
            file = file.replace(/.{1,2}\//, '');
        }
        if (commands[file]) {
            const code = commands[file].toString();
            this.echo(' '.repeat(4) + $.terminal.prism('javascript', code));
        } else {
            this.error('Invalid filename.');
        }
    },
    chat() {
        firebase_chat(term, 'chat');
    },
    sudo() {
        this.error(`You're not in the sudoers file. This incident will be reported.`);
    },
    ['.dmr']() {
        const url = 'https://cdn.jsdelivr.net/gh/jcubic/' +
              'ansidec@master/example/unix_v.ans';
        return fetch(url).then(res => res.text()).then(text => {
            this.echo(text, { ansi: true });
        });
    },
    dir() {
        this.error('This is based on Linux not Windows. Try <white>help</white>.');
    },
    ls(...args) {
        const { _: [dir], l, h, a } = $.terminal.parse_options(args, {
            boolean: ['l', 'a', 'h']
        });

        const print_home = () => {
            this.echo(l ? home_detail(h, a) : home(a));
        };
        if (dir) {
            if (dir.match(/^~\/?$/)) {
                print_home();
            } else if (dir.startsWith('~/')) {
                const path = dir.substring(2);
                const dirs = path.split('/');
                if (dirs.length > 1) {
                    this.error('Invalid directory.');
                } else {
                    const dir = dirs[0];
                    this.echo(directories[dir].join('\n'));
                }
            } else if (cwd === '..') {
                print_home();
            } else if (cwd === root) {
                if (dir in directories) {
                    this.echo(directories[dir].join('\n'));
                } else {
                    this.error('Invalid directory.');
                }
            } else {
                this.error('Invalid directory.');
            }
        } else if (cwd === root) {
            print_home();
        } else {
            const dir = cwd.substring(2);
            this.echo(directories[dir].join('\n'));
        }
    },
    source() {
        const url = 'https://github.com/jcubic/jankiewicz-website'
        this.echo(`You can find source code of this website on <a href="${url}" target="_blank">GitHub</a>.`);
    },
    cd(dir = null) {
        if (dir === null || (dir === '..' && cwd !== root) || dir.match(/^~\/?$/)) {
            cwd = root;
        } else {
            let name;
            if (dir.startsWith('~/')) {
                name = dir.substring(2);
            } else if (dir.startsWith('./') && cwd === root) {
                name = dir.substring(2);
            } else if (dir.startsWith('../') && cwd !== root) {
                name = dir.substring(3);
            } else {
                name = dir;
            }
            if (name.endsWith('/')) {
                name = name.replace(/\/+$/, '');
            }
            if (dirs.includes(name)) {
                cwd = root + '/' + name;
            } else if (public_commands.find(cmd => cmd === name)) {
                this.error(`Invalid directory. '${dir}' is a command, you need to type its name to run.`);
            } else if (projects.find(([project]) => project === name)) {
                this.error(`Invalid directory. '${dir}' is a project, you need click on the link.`);
            } else if (files.find(cmd => cmd.name === name)) {
                this.error(`Invalid directory. '${dir}' is a file.`);
            } else {
                this.error('Invalid directory.');
            }
        }
    },
    credits() {
        this.echo([
            '',
            '<white>Used libraries, artwork, and services:</white>',
            '* <a href="https://terminal.jcubic.pl">' +
                'jQuery Terminal</a>',
            '* <a href="https://www.npmjs.com/package/wcwidth">' +
                'wcwidth</a>',
            '* <a href="https://www.npmjs.com/package/randomcolor">' +
                'Random Color</a>',
            '* <a href="https://github.com/patorjk/figlet.js/">' +
                'Figlet.js</a>',
            '* <a href="https://firebase.google.com/">' +
                'Firebase</a>',
            '* <a href="https://sanderfocus.nl/">' +
                'Dennis Ritchie ANSI Art</a>',
            '* <a href="https://www.asciimation.co.nz/">' +
                'STAR WARS ASCIIMATION</a>',
            ''
        ].join('\n'));
    },
    record(arg = null) {
        if (arg == 'start') {
            term.history_state(true);
        } else if (arg == 'stop') {
            term.history_state(false);
        } else {
            term.echo('save commands in url hash so you can share ' +
                      'the link\n\nusage: record [stop|start]');
        }
    },
    async blog() {
        const articles = await fetch_rss();
        await figlet_ready;
        const ascii = figlet_render('Blog');
        const message = '<white>This is a less command, use <i>q</i> to exit</white>';
        const links = articles.map(({link, title}, index) => {
            return `* <a href="#" class="post" data-index="${index}">${
                     title
                    }</a>`;
        }).join('\n');
        this.less(ascii + `\n${message}\n\n` + links, {
            formatters: true,
            onExit() {
                term.off('click', 'a.post', handler);
            }
        });
        const handler = (e) => {
            const $target = $(e.target);
            const index = $target.data('index');
            const { title, link, description: html } = articles[index];
            const description = $.terminal.apply_formatters(html);
            this.less([
                `# <bold><white>${title}</white></bold>`,
                '',
                description,
                '',
                escape_brackets(`<a href="${link}">[ more ]</a>`),
            ].join('\n'), {
                wrap: true,
                keepWords: true,
                formatters: true
            });
            return false;
        }
        term.on('click', 'a.post', handler);
    },
    async uname(...args) {
        if (!args.length) {
            this.echo('Browser');
        } else {
            const {a} = $.terminal.parse_options(args, { boolean: ['a'] });
            if (a) {
                const res = await fetch('/filemtime.php?fname=js/terminal.js');
                const date = await res.text();
                this.echo(`Browser jcubic jQuery Terminal ${$.terminal.version}; ${date}`);
            }
        }
    },
    mkdir: fake,
    npm: fake,
    pip: fake,
    rm() {
        this.echo('Nice try :)');
    },
    hi: hello,
    hello,
    yo: hello,
    whoami() {
        this.echo('guest');
    },
    async ['star-wars'](delay = 50) {
        if (this.cols() < 67) {
            this.error('not enough width to run the star wars');
            return;
        }
        window.sw_frames = window.sw_frames ?? [];
        if (typeof star_wars === 'undefined') {
            await $.getScript('https://cdn.jsdelivr.net/gh/jcubic/static@master/js/star_wars.js');
            const LINES_PER_FRAME = 14;
            const lines = star_wars.length;
            for (let i = 0; i < lines; i += LINES_PER_FRAME) {
                sw_frames.push(star_wars.slice(i, i + LINES_PER_FRAME));
            }
        }
        let stop = false;
        function play(term) {
            let i = 0;
            let next_delay;
            (function display() {
                if (i == sw_frames.length) {
                    i = 0;
                }
                if (!stop) {
                    term.clear();
                    if (sw_frames[i][0].match(/[0-9]+/)) {
                        next_delay = sw_frames[i][0] * delay;
                    } else {
                        next_delay = delay;
                    }
                    term.echo(sw_frames[i++].slice(1).join('\n')+'\n');
                    setTimeout(display, next_delay);
                }
            })();
        }
        const view = window.view = this.export_view();
        function exit() {
            stop = true;
            this.cmd().show();
            this.import_view(view);
            return false;
        }
        this.push($.noop, {
            onExit: exit,
            keymap: {
                'Q': exit,
                'CTRL+C': exit,
                'ESCAPE': exit
            },
            prompt: ''
        });
        this.cmd().hide();
        play(this);
    },
    reset() {
        cwd = root;
        this.clear();
    }
};

const hidden = ['.dmr', 'sudo'];

const public_commands = Object.keys(commands).filter(name => {
    return !hidden.includes(name);
});

const files = [
    'chat', 'reset', 'credits', 'record', 'blog', 'star-wars', '.dmr'
].map(name => {
    const size = commands[name]?.toString().length || 0;
    return { name, size };
});

const escape_brackets = $.terminal.escape_brackets;

$.terminal.xml_formatter.tags.p = $.terminal.xml_formatter.tags.span;

const { promise: figlet_ready, resolve } = Promise.withResolvers();

const font = 'Slant';
figlet.defaults({ fontPath: 'https://cdn.jsdelivr.net/npm/figlet/fonts' });
figlet.preloadFonts([font], resolve);

async function fetch_rss() {
    const response = await fetch('https://jakub.jankiewicz.org/blog/rss.xml');
    const xmlText = await response.text();
    const parser = new DOMParser();
    const xmlDoc = parser.parseFromString(xmlText, 'application/xml');
    const items = Array.from(xmlDoc.querySelectorAll('item'));
    function text(node, query) {
        return node.querySelector(query)?.textContent ?? '';
    }

    return items.map(item => ({
        title: text(item, 'title'),
        link: text(item, 'link'),
        description: decode_html(text(item, 'description'))
    }));
}

function hello() {
    this.echo('use <white class="command">chat</white> to say hi!');
}

function fake() {
    this.echo('This is not a real terminal. Try using <white class="command>help</white>.');
}

function decode_html(str) {
    let html = str?.replace(/\n/g, ' ').replace(/\s+/g, ' ');
    if (!html?.match(/&/)) {
        return html;
    }
    html = $('<div>').html(html).html();
    return html;
}

function trim(str) {
    return str.replace(/[\n\s]+$/, '');
}

function figlet_render(text) {
    const cols = term.cols();
    return trim(figlet.textSync(text, {
        font: font,
        width: cols,
        whitespaceBreak: true
    }));
}

function is_relative(name) {
    return (cwd === root && name.startsWith('./')) || (cwd !== root && name.startsWith('../'))
}

$(function() {
    window.term = $('#term > div').terminal([commands, function(command) {
        const { name, args } = $.terminal.split_command(command);
        if (dirs.includes(name)) {
            this.echo(`<yellow>${name} is a directory. Try <white class="command">` +
                      `cd ${name}</white> command!</yellow>`);
        } else {
            if (is_relative(name)) {
                const cmd = name.replace(/^.{1,2}\//, '');
                if (commands[cmd]) {
                    return commands[cmd].apply(this, args);
                }
            }
            this.echo(`<red>Command '${name}' Not Found! Try <white class="command">help</white>.</red>`);
        }
    }], {
        greetings: false,
        completion(string) {
            const { name, rest } = $.terminal.parse_command(this.get_command());
            if (['cd', 'ls'].includes(name)) {
                const m = rest.match(/(\.|~)\//);
                if (m) {
                    return dirs.map(dir => `${m[1]}/${dir}`);
                }
                if (rest.startsWith('../') && cwd !== root) {
                    return dirs.map(dir => `../${dir}`);
                }
                if (cwd === root) {
                    return dirs;
                }
            }
            const completion = name === 'cat' ? rest : string;
            if (is_relative(completion)) {
                const dir = completion.match(/^(.{1,2}|~)\//)[1];
                return list_files(true).map(file => `${dir}/${file.name}`);
            }
            return public_commands;
        },
        onBeforeCommand(command) {
            track('command', command);
        },
        execHash: true,
        checkArity: false,
        prompt
    });

    term.on('click', '.command', function() {
        const command = $(this).text();
        track('click', command);
        term.exec(command);
    });

    term.on('click', '.directory', function() {
        const dir = $(this).text();
        const command = `cd ~/${dir}`;
        track('click', command);
        term.exec(command);
    });

});

function track(label, data) {
    if (window.umami) {
        umami.track('REPL', { label, data });
    }
}

// ref: https://stackoverflow.com/a/14919494/387194
function human_file_size(bytes, dp=0) {
  const thresh = 1024;

  if (Math.abs(bytes) < thresh) {
    return bytes.toString();
  }

  const units = ['K', 'M', 'G', 'T', 'P', 'E', 'Z', 'Y']
  let u = -1;
  const r = 10**dp;

  do {
    bytes /= thresh;
    ++u;
  } while (Math.round(Math.abs(bytes) * r) / r >= thresh && u < units.length - 1);


  return bytes.toFixed(dp) + units[u];
}
