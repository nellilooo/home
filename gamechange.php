<?

function getWinChance($game) {
    switch ($game) {
        case 'rulet':
            return 50; //условие: 1 игрок, барабан вращается. 1 к 5
        case 'blackjake':
            return 39; //условие: дилер соберет от 17 до 21 очка в 61% случаев
        case 'baccarat':
            return 45;
        case 'craps':
            return 49;
        case 'wheel':
            return 48; //условие: вероятность 26 к 54
        default:
            return 0;
    }
    
}