#!/usr/bin/env node

const cheerio = require('cheerio');
const RSS = require('rss');
const fs = require('fs');

(async () => {
  try {
    const html = fs.readFileSync('../writing.php', 'utf8');
    const sanitizedHtml = html.replace(/<\?php.*?\?>/gs, '');

    const $ = cheerio.load(sanitizedHtml);

    const ul = $('article ul').first();

    const feed = new RSS({
      title: 'My Other Articles',
      description: "Articles I've wrote for different publishers",
      feed_url: 'https://jakub.jankiewicz.org/rss.xml',
      site_url: 'https://jakub.jankiewicz.org/',
      image_url: 'https://jakub.jankiewicz.org/favicon.ico',
    });

    const items = [];

    ul.find('a').each((_, element) => {
      const link = $(element).attr('href');
      const title = $(element).text();

      if (link && title) {
        items.push({
          title,
          url: link,
          description: title,
        });
      }
    });

    items.reverse();

    items.forEach(item => feed.item(item));

    fs.writeFileSync('../rss.xml', feed.xml({ indent: true }), 'utf8');
  } catch (error) {
    console.error('Error fetching or processing the page:', error.message);
  }
})();
