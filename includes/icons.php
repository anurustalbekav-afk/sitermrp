<?php
// SVG-иконки (inline)
function icon($name, $class = 'icon') {
    $svg = '';
    switch ($name) {
        case 'home':
            $svg = '<path d="M3 11.5 12 4l9 7.5V20a1 1 0 0 1-1 1h-5v-6h-6v6H4a1 1 0 0 1-1-1z"/>';
            break;
        case 'news':
            $svg = '<rect x="3" y="4" width="18" height="16" rx="2"/><line x1="7" y1="9"  x2="17" y2="9"/><line x1="7" y1="13" x2="17" y2="13"/><line x1="7" y1="17" x2="13" y2="17"/>';
            break;
        case 'server':
            $svg = '<rect x="3" y="4"  width="18" height="6" rx="1"/><rect x="3" y="14" width="18" height="6" rx="1"/><circle cx="7" cy="7"  r="1"/><circle cx="7" cy="17" r="1"/>';
            break;
        case 'cart':
            $svg = '<circle cx="9" cy="20" r="1.5"/><circle cx="17" cy="20" r="1.5"/><path d="M3 4h2l2.5 11h11l2-8H6"/>';
            break;
        case 'gear':
            $svg = '<circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.7 1.7 0 0 0 .3 1.8l.1.1a2 2 0 1 1-2.8 2.8l-.1-.1a1.7 1.7 0 0 0-1.8-.3 1.7 1.7 0 0 0-1 1.5V21a2 2 0 1 1-4 0v-.1a1.7 1.7 0 0 0-1-1.5 1.7 1.7 0 0 0-1.8.3l-.1.1a2 2 0 1 1-2.8-2.8l.1-.1a1.7 1.7 0 0 0 .3-1.8 1.7 1.7 0 0 0-1.5-1H3a2 2 0 1 1 0-4h.1a1.7 1.7 0 0 0 1.5-1 1.7 1.7 0 0 0-.3-1.8l-.1-.1a2 2 0 1 1 2.8-2.8l.1.1a1.7 1.7 0 0 0 1.8.3h0a1.7 1.7 0 0 0 1-1.5V3a2 2 0 1 1 4 0v.1a1.7 1.7 0 0 0 1 1.5 1.7 1.7 0 0 0 1.8-.3l.1-.1a2 2 0 1 1 2.8 2.8l-.1.1a1.7 1.7 0 0 0-.3 1.8v0a1.7 1.7 0 0 0 1.5 1H21a2 2 0 1 1 0 4h-.1a1.7 1.7 0 0 0-1.5 1z"/>';
            break;
        case 'headset':
            $svg = '<path d="M4 14v-2a8 8 0 1 1 16 0v2"/><rect x="2"  y="14" width="5" height="6" rx="1.5"/><rect x="17" y="14" width="5" height="6" rx="1.5"/>';
            break;
        case 'user':
            $svg = '<circle cx="12" cy="8" r="4"/><path d="M4 21a8 8 0 0 1 16 0"/>';
            break;
        case 'exit':
            $svg = '<path d="M10 17l-5-5 5-5"/><line x1="5" y1="12" x2="17" y2="12"/><path d="M14 4h5a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1h-5"/>';
            break;
        case 'shield':
            $svg = '<path d="M12 3l8 3v6c0 5-4 8-8 9-4-1-8-4-8-9V6l8-3z"/><path d="M9 12l2 2 4-4"/>';
            break;
        case 'people':
            $svg = '<circle cx="9" cy="9" r="3"/><path d="M3 19a6 6 0 0 1 12 0"/><circle cx="17" cy="8" r="2.5"/><path d="M15 19a5 5 0 0 1 7-4.5"/>';
            break;
        case 'refresh':
            $svg = '<path d="M21 12a9 9 0 0 1-15.5 6.3L3 16"/><path d="M3 12a9 9 0 0 1 15.5-6.3L21 8"/><polyline points="3 21 3 16 8 16"/><polyline points="21 3 21 8 16 8"/>';
            break;
        case 'arrow':
            $svg = '<polyline points="9 6 15 12 9 18"/>';
            break;
        case 'bell':
            $svg = '<path d="M6 16V11a6 6 0 1 1 12 0v5l1.5 2H4.5z"/><path d="M10 20a2 2 0 0 0 4 0"/>';
            break;
        case 'star':
            $svg = '<polygon points="12 3 14.6 9 21 9.6 16 13.9 17.5 20 12 16.8 6.5 20 8 13.9 3 9.6 9.4 9"/>';
            break;
        case 'gift':
            $svg = '<rect x="3" y="8" width="18" height="13" rx="1"/><line x1="12" y1="8" x2="12" y2="21"/><path d="M12 8c-2 0-4-1-4-3s2-3 4 0c2-3 4-2 4 0s-2 3-4 3z"/>';
            break;
        case 'signal':
            $svg = '<rect x="2"  y="14" width="3" height="6" rx="1"/><rect x="7"  y="10" width="3" height="10" rx="1"/><rect x="12" y="6"  width="3" height="14" rx="1"/><rect x="17" y="2"  width="3" height="18" rx="1"/>';
            break;
    }
    return '<svg class="' . htmlspecialchars($class) . '" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">' . $svg . '</svg>';
}
