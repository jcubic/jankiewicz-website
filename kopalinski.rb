#!/usr/bin/ruby
#
#    Skrypt wyswietla definicje ze Slownika Wyrazow Obcych Kopalinskiego.
#    Copyright (C) 2010 Jakub Jankiewicz <http://jcubic.pl>
#
#    This program is free software: you can redistribute it and/or modify
#    it under the terms of the GNU General Public License as published by
#    the Free Software Foundation, either version 3 of the License, or
#    (at your option) any later version.
#
#    This program is distributed in the hope that it will be useful,
#    but WITHOUT ANY WARRANTY; without even the implied warranty of
#    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#    GNU General Public License for more details.
#
#    You should have received a copy of the GNU General Public License
#    along with this program.  If not, see <http://www.gnu.org/licenses/>.
#

require 'net/http'
require 'uri'
require 'cgi'

class URI::Generic
   def uri
      "#{self.path}?#{self.query}"
   end
end

def get(url)
   url = URI.parse(url)
   request = Net::HTTP.new(url.host)
   request.get(url.uri).body
end

if ARGV.length == 0
   puts "enter keyword"
else
    keys = CGI::escape(ARGV.join(' '))
    base = "http://www.slownik-online.pl"
    searchurl = "#{base}/cgibin/search?charset=utf-8&words=#{keys}&Submit=Szukaj"
    response = get(searchurl)
    response.scan(/a href="(\/kopalinski\/[^"]*\.php)"/).each {|match|
       page = get(base + match[0])
       if page =~ /<table border=0.*?<\/table>/mi
          puts $&.gsub(/<\/?[^>]*>/m, '').gsub(/^&nbsp;$/, '\n\n').gsub(/&nbsp;/, " ").gsub(/[\n\r]/, '').gsub(/\\n/, "\n").strip
       end
    }
end