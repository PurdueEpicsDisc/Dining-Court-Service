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
            initValue: $('#earhart-container').next().find('p').text().match(/\d*[.]\d*|\d+/m),
            roundCorner : false,
            displayNumber: false
    });

    $('.chart-description p').bind("DOMSubtreeModified", function() {
      var capacity = $('#earhart-container').next().find('p').text();
      capacity = capacity.match(/\d*[.]\d*|\d+/m);
      console.log(capacity);
      var radialObj = $('#earhart-container').data('radialIndicator');
      radialObj.animate(+capacity);
    });

    $('#windsor-container').radialIndicator({
            radius: radius,
            barColor: barColor,
            barWidth: barWidth,
            initValue: 0,
            roundCorner : false,
            displayNumber: false
    });

    $('#wiley-container').radialIndicator({
            radius: radius,
            barColor: barColor,
            barWidth: barWidth,
            initValue: 0,
            roundCorner : false,
            displayNumber: false
    });

    $('#ford-container').radialIndicator({
            radius: radius,
            barColor: barColor,
            barWidth: barWidth,
            initValue: 0,
            roundCorner : false,
            displayNumber: false
    });

    $('#hillenbrand-container').radialIndicator({
            radius: radius,
            barColor: barColor,
            barWidth: barWidth,
            initValue: 0,
            roundCorner : false,
            displayNumber: false
    });
};

$(document).ready(main);
