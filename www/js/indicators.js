var main = function() {
    var radius = 35;
    var barWidth = 15;
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
            initValue: 20,
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
            initValue: 40,
            roundCorner : false,
            displayNumber: false
    });

    $('#ford-container').radialIndicator({
            radius: radius,
            barColor: barColor,
            barWidth: barWidth,
            initValue: 70,
            roundCorner : false,
            displayNumber: false
    });

    $('#hillenbrand-container').radialIndicator({
            radius: radius,
            barColor: barColor,
            barWidth: barWidth,
            initValue: 99,
            roundCorner : false,
            displayNumber: false
    });
};

$(document).ready(main);