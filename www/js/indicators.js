$(document).ready(function(){
    $('#earhartContainer').radialIndicator({
            radius: 60,
            barColor: {
                0: '#33cc99',
                33: '#ffdd40',
                66: '#ffad40',
                100: '#ff4540'
            },
            barWidth: 10,
            initValue: 100,
            roundCorner : false,
            percentage: true
    });

    $('#windsorContainer').radialIndicator({
            radius: 60,
            barColor: {
                0: '#33cc99',
                33: '#ffdd40',
                66: '#ffad40',
                100: '#ff4540'
            },
            barWidth: 10,
            initValue: 30,
            roundCorner : false,
            percentage: true
    });

    $('#wileyContainer').radialIndicator({
            radius: 60,
            barColor: {
                0: '#33cc99',
                33: '#ffdd40',
                66: '#ffad40',
                100: '#ff4540'
            },
            barWidth: 10,
            initValue: 60,
            roundCorner : false,
            percentage: true
    });

    $('#fordContainer').radialIndicator({
            radius: 60,
            barColor: {
                0: '#33cc99',
                33: '#ffdd40',
                66: '#ffad40',
                100: '#ff4540'
            },
            barWidth: 10,
            initValue: 90,
            roundCorner : false,
            percentage: true
    });

    $('#hillenbrandContainer').radialIndicator({
            radius: 60,
            barColor: {
                0: '#33cc99',
                33: '#ffdd40',
                66: '#ffad40',
                100: '#ff4540'
            },
            barWidth: 10,
            initValue: 20,
            roundCorner : false,
            percentage: true
    });
});