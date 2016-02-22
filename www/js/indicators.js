var main = function() {
    var radius = 30;
    var barWidth = 25;
    var barColor = {
        0: '#33cc99',
        33: '#ffdd40',
        66: '#ffad40',
        100: '#ff4540'
    };
    $('#earhart-container').radialIndicator({
            radius: radius,
            barColor: barColor,
            barWidth: barWidth,
            initValue: 100,
            roundCorner : false,
            displayNumber: false
    });

    $('#windsor-container').radialIndicator({
            radius: radius,
            barColor: barColor,
            barWidth: barWidth,
            initValue: 30,
            roundCorner : false,
            displayNumber: false
    });

    $('#wiley-container').radialIndicator({
            radius: radius,
            barColor: barColor,
            barWidth: barWidth,
            initValue: 60,
            roundCorner : false,
            displayNumber: false
    });

    $('#ford-container').radialIndicator({
            radius: radius,
            barColor: barColor,
            barWidth: barWidth,
            initValue: 90,
            roundCorner : false,
            displayNumber: false
    });

    $('#hillenbrand-container').radialIndicator({
            radius: radius,
            barColor: barColor,
            barWidth: barWidth,
            initValue: 20,
            roundCorner : false,
            displayNumber: false
    });
};

$(document).ready(main);