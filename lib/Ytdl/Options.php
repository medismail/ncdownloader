<?php
namespace OCA\NCDownloader\Ytdl;

class Options
{

    public static function get()
    {
        return array_keys(self::options());
    }
    public static function options()
    {
        return array(
            'help' => 'this help text and exit',
            'version' => 'program version and exit',
            'update' => 'this program to latest version. Make sure that you have sufficient permissions (run with sudo if needed)',
            'ignore-errors' => 'download and postprocessing errors. The download will be considered successful even if the postprocessing',
            'abort-on-error' => 'downloading of further videos if an error occurs (Alias: --no-ignore-errors)',
            'dump-user-agent' => 'the current user-agent and exit',
            'list-extractors' => 'all supported extractors and exit',
            'extractor-descriptions' => 'descriptions of all supported extractors and exit',
            'force-generic-extractor' => 'extraction to use the generic extractor',
            'default-search' => 'Use this prefix for unqualified URLs. For example "gvsearch2:" downloads two videos from google videos for the',
            'ignore-config' => 'Don\'t load any more configuration files except those given by --config-locations. For backward compatibility, if',
            'config-location' => 'Location of the configuration file; either the path to the config or its containing directory.',
            'flat-playlist' => 'not extract the videos of a playlist, only list them',
            'mark-watched' => 'videos watched (even with --simulate). Currently only supported for YouTube',
            'no-mark-watched' => 'not mark videos watched (default)',
            'no-color' => 'not emit color codes in output',
            'proxy' => 'Use the specified HTTP/HTTPS/SOCKS proxy. To enable SOCKS proxy, specify a proper scheme. For example',
            'socket-timeout' => 'Time to wait before giving up, in seconds',
            'source-address' => 'Client-side IP address to bind to',
            'force-ipv4' => 'all connections via IPv4',
            'force-ipv6' => 'all connections via IPv6',
            'geo-verification-proxy' => 'Use this proxy to verify the IP address for some geo-restricted sites. The default proxy specified by --proxy (or',
            'geo-bypass' => 'geographic restriction via faking X-Forwarded-For HTTP header (default)',
            'no-geo-bypass' => 'not bypass geographic restriction via faking X-Forwarded-For HTTP header',
            'geo-bypass-country' => 'Force bypass geographic restriction with explicitly provided two-letter ISO 3166-2 country code',
            'playlist-start' => 'Playlist video to start at (default is 1)',
            'playlist-end' => 'Playlist video to end at (default is last)',
            'match-title' => 'Download only matching titles (regex or caseless sub-string)',
            'reject-title' => 'Skip download for matching titles (regex or caseless sub-string)',
            'max-downloads' => 'Abort after downloading NUMBER files',
            'min-filesize' => 'Do not download any videos smaller than SIZE (e.g. 50k or 44.6m)',
            'max-filesize' => 'Do not download any videos larger than SIZE (e.g. 50k or 44.6m)',
            'date' => 'Download only videos uploaded on this date. The date can be "YYYYMMDD" or in the format',
            'datebefore' => 'Download only videos uploaded on or before this date. The date formats accepted is the same as --date',
            'dateafter' => 'Download only videos uploaded on or after this date. The date formats accepted is the same as --date',
            'min-views' => 'Do not download any videos with less than COUNT views',
            'max-views' => 'Do not download any videos with more than COUNT views',
            'match-filter' => 'Generic video filter. Any field (see "OUTPUT TEMPLATE") can be compared with a number or a string using the',
            'no-playlist' => 'only the video, if the URL refers to a video and a playlist',
            'yes-playlist' => 'the playlist, if the URL refers to a video and a playlist',
            'age-limit' => 'Download only videos suitable for the given age',
            'download-archive' => 'Download only videos not listed in the archive file. Record the IDs of all downloaded videos in it',
            'include-ads' => 'advertisements as well (experimental)',
            'limit-rate' => 'Maximum download rate in bytes per second (e.g. 50K or 4.2M)',
            'retries' => 'Number of retries (default is 10), or "infinite"',
            'fragment-retries' => 'Number of retries for a fragment (default is 10), or "infinite" (DASH, hlsnative and ISM)',
            'skip-unavailable-fragments' => 'unavailable fragments for DASH, hlsnative and ISM (default) (Alias: --no-abort-on-unavailable-fragment)',
            'abort-on-unavailable-fragment' => 'downloading if a fragment is unavailable (Alias: --no-skip-unavailable-fragments)',
            'keep-fragments' => 'downloaded fragments on disk after downloading is finished',
            'buffer-size' => 'Size of download buffer (e.g. 1024 or 16K) (default is 1024)',
            'no-resize-buffer' => 'not automatically adjust the buffer size',
            'http-chunk-size' => 'Size of a chunk for chunk-based HTTP downloading (e.g. 10485760 or 10M) (default is disabled). May be useful for',
            'playlist-reverse' => 'playlist videos in reverse order',
            'playlist-random' => 'playlist videos in random order',
            'xattr-set-filesize' => 'file xattribute youtube-dl.filesize with expected file size',
            'hls-prefer-native' => 'the native HLS downloader instead of ffmpeg',
            'hls-prefer-ffmpeg' => 'ffmpeg instead of the native HLS downloader',
            'hls-use-mpegts' => 'the mpegts container for HLS videos; allowing some players to play the video while downloading, and reducing the',
            'external-downloader' => 'Use the specified external downloader. Currently supports aria2c,avconv,axel,curl,ffmpeg,httpie,wget',
            'external-downloader-args' => 'Give these arguments to the external downloader',
            'batch-file' => 'File containing URLs to download ("-" for stdin), one URL per line. Lines starting with "#", ";" or "]" are',
            'id' => 'only video ID in file name',
            'output' => 'an absolute path',
            'output-na-placeholder' => 'Placeholder value for unavailable meta fields in output filename template (default: "NA")',
            'autonumber-start' => 'Specify the start value for %(autonumber)s (default is 1)',
            'restrict-filenames' => 'filenames to only ASCII characters, and avoid "&" and spaces in filenames',
            'no-overwrites' => 'not overwrite any files',
            'continue' => 'partially downloaded files/fragments (default)',
            'no-continue' => 'not resume partially downloaded fragments. If the file is not fragmented, restart download of the entire file',
            'no-part' => 'not use .part files - write directly into output file',
            'no-mtime' => 'not use the Last-modified header to set the file modification time',
            'write-description' => 'video description to a .description file',
            'write-info-json' => 'video metadata to a .info.json file (this may contain personal information)',
            'write-annotations' => 'video annotations to a .annotations.xml file',
            'load-info-json' => 'JSON file containing the video information (created with the "--write-info-json" option)',
            'cookies' => 'Netscape formatted file to read cookies from and dump cookie jar in',
            'cache-dir' => 'Location in the filesystem where youtube-dl can store some downloaded information (such as client ids and',
            'no-cache-dir' => 'filesystem caching',
            'rm-cache-dir' => 'all filesystem cache files',
            'write-thumbnail' => 'thumbnail image to disk',
            'write-all-thumbnails' => 'all thumbnail image formats to disk',
            'list-thumbnails' => 'available thumbnails of each video. Simulate unless --no-simulate is used',
            'quiet' => '',
            'no-warnings' => 'warnings',
            'simulate' => 'not download the video and do not write anything to disk',
            'skip-download' => 'not download the video but write all related files (Alias: --no-download)',
            'get-url' => 'Simulate, quiet but print URL',
            'get-title' => 'Simulate, quiet but print title',
            'get-id' => 'Simulate, quiet but print id',
            'get-thumbnail' => 'Simulate, quiet but print thumbnail URL',
            'get-description' => 'Simulate, quiet but print video description',
            'get-duration' => 'Simulate, quiet but print video length',
            'get-filename' => 'Simulate, quiet but print output filename',
            'get-format' => 'Simulate, quiet but print output format',
            'dump-json' => 'Quiet, but print JSON information for each video. Simulate unless --no-simulate is used. See "OUTPUT TEMPLATE" for a',
            'dump-single-json' => 'Quiet, but print JSON information for each url or infojson passed. Simulate unless --no-simulate is used. If the URL',
            'print-json' => 'quiet and print the video information as JSON (video is still being downloaded).',
            'newline' => 'progress bar as new lines',
            'no-progress' => 'not print progress bar',
            'console-title' => 'progress in console titlebar',
            'verbose' => 'various debugging information',
            'dump-pages' => 'downloaded pages encoded using base64 to debug problems (very verbose)',
            'write-pages' => 'downloaded intermediary pages to files in the current directory to debug problems',
            'print-traffic' => 'sent and read HTTP traffic',
            'call-home' => 'the youtube-dl server for debugging',
            'no-call-home' => 'NOT contact the youtube-dl server for debugging',
            'encoding' => 'Force the specified encoding (experimental)',
            'no-check-certificate' => 'HTTPS certificate validation',
            'prefer-insecure' => 'an unencrypted connection to retrieve information about the video (Currently supported only for YouTube)',
            'user-agent' => 'Specify a custom user agent',
            'referer' => 'Specify a custom referer, use if the video access is restricted to one domain',
            'add-header' => 'Specify a custom HTTP header and its value, separated by a colon \':\'.  You can use this option multiple times',
            'bidi-workaround' => 'around terminals that lack bidirectional text support. Requires bidiv or fribidi executable in PATH',
            'sleep-interval' => 'Number of seconds to sleep before each download. This is the minimum time to sleep when used along with --max-sleep-',
            'max-sleep-interval' => 'Maximum number of seconds to sleep. Can only be used along with --min-sleep-interval',
            'format' => 'Video format code, see "FORMAT SELECTION" for more details',
            'all-formats' => 'all available video formats',
            'prefer-free-formats' => 'video formats with free containers over non-free ones of same quality. Use with "-S ext" to strictly prefer',
            'list-formats' => 'available formats of each video. Simulate unless --no-simulate is used',
            'youtube-dl-skip-dash-manifest' => 'not download the DASH manifests and related data on YouTube videos',
            'merge-output-format' => 'If a merge is required (e.g. bestvideo+bestaudio), output to given container format. One of mkv, mp4, ogg, webm,',
            'write-sub' => 'subtitle file',
            'write-auto-sub' => 'automatically generated subtitle file (YouTube only)',
            'all-subs' => 'all the available subtitles of the video',
            'list-subs' => 'a list of available language tags',
            'sub-format' => 'Subtitle format, accepts formats preference, for example: "srt" or "ass/srt/best"',
            'sub-lang' => 'Languages of the subtitles to download (optional) separated by commas, use --list-subs for available language tags',
            'username' => 'Login with this account ID',
            'password' => 'Account password. If this option is left out, yt-dlp will ask interactively',
            'twofactor' => 'Two-factor authentication code',
            'netrc' => '.netrc authentication data',
            'video-password' => 'Video password (vimeo, youku)',
            'ap-mso' => 'Adobe Pass multiple-system operator (TV provider) identifier, use --ap-list-mso for a list of available MSOs',
            'ap-username' => 'Multiple-system operator account login',
            'ap-password' => 'Multiple-system operator account password. If this option is left out, yt-dlp will ask interactively',
            'ap-list-mso' => 'all supported multiple-system operators',
            'extract-audio' => 'video files to audio-only files (requires ffmpeg and ffprobe)',
            'audio-format' => 'Specify audio format to convert the audio to when -x is used. Currently supported formats are: best (default) or one',
            'audio-quality' => 'Specify ffmpeg audio quality, insert a value between 0 (best) and 10 (worst) for VBR or a specific bitrate like 128K',
            'recode-video' => 'Re-encode the video into another format if re-encoding is necessary. The syntax and supported formats are the same',
            'postprocessor-args' => 'Give these arguments to the postprocessor',
            'keep-video' => 'the intermediate video file on disk after post-processing',
            'no-post-overwrites' => 'not overwrite post-processed files',
            'embed-subs' => 'subtitles in the video (only for mp4, webm and mkv videos)',
            'embed-thumbnail' => 'thumbnail in the video as cover art',
            'add-metadata' => 'metadata to the video file',
            'metadata-from-title' => 'Parse additional metadata like song title / artist from the video title. The format syntax is the same as --output.',
            'xattrs' => 'metadata to the video file\'s xattrs (using dublin core and xdg standards)',
            'fixup' => 'Automatically correct known faults of the file. One of never (do nothing), warn (only emit a warning),',
            'prefer-avconv' => 'avconv over ffmpeg for running the postprocessors',
            'prefer-ffmpeg' => 'ffmpeg over avconv for running the postprocessors (default)',
            'ffmpeg-location' => 'Location of the ffmpeg binary; either the path to the binary or its containing directory',
            'exec' => 'Execute a command on the file after downloading and post-processing, similar to find\'s -exec syntax. Example:',
            'convert-subs' => 'Convert the subtitles to another format (currently supported: srt|vtt|ass|lrc) (Alias: --convert-subtitles)',
            'no-abort-on-error' => 'with next video on download errors; e.g. to skip unavailable videos in a playlist (default)',
            'no-config-locations' => 'not load any custom configuration files (default). When given inside a configuration file, ignore all previous',
            'config-locations' => 'Location of the main configuration file; either the path to the config or its containing directory. Can be used',
            'no-flat-playlist' => 'the videos of a playlist',
            'live-from-start' => 'livestreams from the start. Currently only supported for YouTube (Experimental)',
            'no-live-from-start' => 'livestreams from the current time (default)',
            'wait-for-video' => 'Wait for scheduled streams to become available. Pass the minimum number of seconds (or range) to wait between retries',
            'no-wait-for-video' => 'not wait for scheduled streams (default)',
            'no-colors' => 'not emit color codes in output',
            'compat-options' => 'Options that can help keep compatibility with youtube-dl or youtube-dl-dlc configurations by reverting some of the',
            'no-match-filter' => 'not use generic video filter (default)',
            'no-download-archive' => 'not use archive file (default)',
            'break-on-existing' => 'the download process when encountering a file that is in the archive',
            'break-on-reject' => 'the download process when encountering a file that has been filtered out',
            'break-per-input' => '--break-on-existing and --break-on-reject act only on the current input URL',
            'no-break-per-input' => '--break-on-existing and --break-on-reject terminates the entire download queue',
            'skip-playlist-after-errors' => 'Number of allowed failures until the rest of the playlist is skipped',
            'concurrent-fragments' => 'Number of fragments of a dash/hlsnative video that should be downloaded concurrently (default is 1)',
            'throttled-rate' => 'Minimum download rate in bytes per second below which throttling is assumed and the video data is re-extracted (e.g.',
            'file-access-retries' => 'Number of times to retry on file access error (default is 3), or "infinite"',
            'no-keep-fragments' => 'downloaded fragments after downloading is finished (default)',
            'resize-buffer' => 'buffer size is automatically resized from an initial value of --buffer-size (default)',
            'no-playlist-reverse' => 'playlist videos in default order (default)',
            'no-hls-use-mpegts' => 'not use the mpegts container for HLS videos. This is default when not downloading live streams',
            'no-batch-file' => 'not read URLs from batch file (default)',
            'no-restrict-filenames' => 'Unicode characters, "&" and spaces in filenames (default)',
            'windows-filenames' => 'filenames to be Windows-compatible',
            'no-windows-filenames' => 'filenames Windows-compatible only if using Windows (default)',
            'trim-filenames' => 'Limit the filename length (excluding extension) to the specified number of characters',
            'force-overwrites' => 'all video and metadata files. This option includes --no-continue',
            'no-force-overwrites' => 'not overwrite the video, but overwrite related files (default)',
            'part' => '.part files instead of writing directly into output file (default)',
            'mtime' => 'the Last-modified header to set the file modification time (default)',
            'no-write-description' => 'not write video description (default)',
            'no-write-info-json' => 'not write video metadata (default)',
            'write-playlist-metafiles' => 'playlist metadata in addition to the video metadata when using --write-info-json, --write-description etc.',
            'no-write-playlist-metafiles' => 'not write playlist metadata when using --write-info-json, --write-description etc.',
            'clean-info-json' => 'some private fields such as filenames from the infojson. Note that it could still contain some personal',
            'no-clean-info-json' => 'all fields to the infojson',
            'write-comments' => 'video comments to be placed in the infojson. The comments are fetched even without this option if the',
            'no-write-comments' => 'not retrieve video comments unless the extraction is known to be quick (Alias: --no-get-comments)',
            'no-cookies' => 'not read/dump cookies from/to file (default)',
            'no-cookies-from-browser' => 'not load cookies from browser (default)',
            'no-write-thumbnail' => 'not write thumbnail image to disk (default)',
            'write-link' => 'an internet shortcut file, depending on the current platform (.url, .webloc or .desktop). The URL may be',
            'write-url-link' => 'a .url Windows internet shortcut. The OS caches the URL based on the file path',
            'write-webloc-link' => 'a .webloc macOS internet shortcut',
            'write-desktop-link' => 'a .desktop Linux internet shortcut',
            'no-simulate' => 'used). This option can be used multiple times',
            'ignore-no-formats-error' => '"No video formats" error. Useful for extracting metadata even if the videos are not actually available for',
            'no-ignore-no-formats-error' => 'error when no downloadable video formats are found (default)',
            'force-write-archive' => 'download archive entries to be written as far as no errors occur, even if -s or another simulation option is',
            'progress' => 'progress bar, even if in quiet mode',
            'legacy-server-connect' => 'allow HTTPS connection to servers that do not support RFC 5746 secure renegotiation',
            'no-check-certificates' => 'HTTPS certificate validation',
            'sleep-requests' => 'Number of seconds to sleep between requests during data extraction',
            'sleep-subtitles' => 'Number of seconds to sleep before each subtitle download',
            'format-sort' => 'Sort the formats by the fields given, see "Sorting Formats" for more details',
            'format-sort-force' => 'user specified sort order to have precedence over all fields, see "Sorting Formats" for more details',
            'no-format-sort-force' => 'fields have precedence over the user specified sort order (default), see "Sorting Formats" for more details',
            'video-multistreams' => 'multiple video streams to be merged into a single file',
            'no-video-multistreams' => 'one video stream is downloaded for each output file (default)',
            'audio-multistreams' => 'multiple audio streams to be merged into a single file',
            'no-audio-multistreams' => 'one audio stream is downloaded for each output file (default)',
            'no-prefer-free-formats' => 'Don\'t give any special preference to free containers (default)',
            'check-formats' => 'that the selected formats are actually downloadable',
            'check-all-formats' => 'all formats for whether they are actually downloadable',
            'no-check-formats' => 'not check that the formats are actually downloadable',
            'write-subs' => 'subtitle file',
            'no-write-subs' => 'not write subtitle file (default)',
            'write-auto-subs' => 'automatically generated subtitle file (Alias: --write-automatic-subs)',
            'no-write-auto-subs' => 'not write auto-generated subtitles (default) (Alias: --no-write-automatic-subs)',
            'sub-langs' => 'Languages of the subtitles to download (can be regex) or "all" separated by commas. (Eg: --sub-langs "en.*,ja") You',
            'netrc-location' => 'Location of .netrc authentication data; either the path or its containing directory. Defaults to ~/.netrc',
            'remux-video' => 'Remux the video into another container if necessary (currently supported:',
            'no-keep-video' => 'the intermediate video file after post-processing (default)',
            'post-overwrites' => 'post-processed files (default)',
            'no-embed-subs' => 'not embed subtitles (default)',
            'no-embed-thumbnail' => 'not embed thumbnail (default)',
            'embed-metadata' => 'metadata to the video file. Also embeds chapters/infojson if present unless --no-embed-chapters/--no-embed-',
            'no-embed-metadata' => 'not add metadata to file (default) (Alias: --no-add-metadata)',
            'embed-chapters' => 'chapter markers to the video file (Alias: --add-chapters)',
            'no-embed-chapters' => 'not add chapter markers (default) (Alias: --no-add-chapters)',
            'embed-info-json' => 'the infojson as an attachment to mkv/mka video files',
            'no-embed-info-json' => 'not embed the infojson as an attachment to the video file',
            'replace-in-metadata' => 'REGEX REPLACE          Replace text in a metadata field using the given regex. This option can be used multiple times',
            'concat-playlist' => 'Concatenate videos in a playlist. One of "never", "always", or "multi_video" (default; only when the videos form a',
            'no-exec' => 'any previously defined --exec',
            'convert-thumbnails' => 'Convert the thumbnails to another format (currently supported: jpg|png|webp)',
            'split-chapters' => 'video into multiple files based on internal chapters. The "chapter:" prefix can be used with "--paths" and "--',
            'no-split-chapters' => 'not split video based on chapters (default)',
            'remove-chapters' => 'Remove chapters whose title matches the given regular expression. Time ranges prefixed by a "*" can also be used in',
            'no-remove-chapters' => 'not remove any chapters from the file (default)',
            'force-keyframes-at-cuts' => 'keyframes around the chapters before removing/splitting them. Requires a re-encode and thus is very slow, but',
            'no-force-keyframes-at-cuts' => 'not force keyframes around the chapters when cutting/splitting (default)',
            'sponsorblock-mark' => 'SponsorBlock categories to create chapters for, separated by commas. Available categories are all, default(=all),',
            'sponsorblock-remove' => 'SponsorBlock categories to be removed from the video file, separated by commas. If a category is present in both',
            'sponsorblock-chapter-title' => 'The title template for SponsorBlock chapters created by --sponsorblock-mark. The same syntax as the output template',
            'no-sponsorblock' => 'both --sponsorblock-mark and --sponsorblock-remove',
            'sponsorblock-api' => 'SponsorBlock API location, defaults to https://sponsor.ajay.app',
            'extractor-retries' => 'Number of retries for known extractor errors (default is 3), or "infinite"',
            'allow-dynamic-mpd' => 'dynamic DASH manifests (default) (Alias: --no-ignore-dynamic-mpd)',
            'ignore-dynamic-mpd' => 'not process dynamic DASH manifests (Alias: --no-allow-dynamic-mpd)',
            'hls-split-discontinuity' => 'HLS playlists to different formats at discontinuities such as ad breaks',
            'no-hls-split-discontinuity' => 'not split HLS playlists to different formats at discontinuities such as ad breaks (default)',
        );
    }
}
