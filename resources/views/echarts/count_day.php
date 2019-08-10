<?php echo $chart_html; ?>

<script>
    $(function () {
        var myChart_<?php echo e($chart); ?> = echarts.init(document.getElementById('<?php echo e($chart); ?>'),null,{renderer: 'canvas'});
        myChart_<?php echo e($chart); ?>.setOption({
            title: {
                text: '近30天数据'
            },
            tooltip: {
                trigger: 'axis'
            },
            legend: {
                data:['注册用户','入驻商品','生成订单','生成需求']
            },
            grid: {
                left: '3%',
                right: '4%',
                bottom: '3%',
                containLabel: true
            },
            toolbox: {
                feature: {
                    saveAsImage: {}
                }
            },
            xAxis: {
                type: 'category',
                boundaryGap: false,
                data: <?php echo json_encode($data['time']); ?>
            },
            yAxis: {
                type: 'value'
            },
            series: [
                {
                    name:'注册用户',
                    type:'line',
                    stack: '总量',
                    data:<?php echo json_encode($data['register']); ?>
                },
                {
                    name:'入驻商品',
                    type:'line',
                    stack: '总量',
                    data:<?php echo json_encode($data['goods']); ?>
                },
                {
                    name:'生成订单',
                    type:'line',
                    stack: '总量',
                    data:<?php echo json_encode($data['indent']); ?>
                },
                {
                    name:'生成需求',
                    type:'line',
                    stack: '总量',
                    data:<?php echo json_encode($data['demand']); ?>
                }
            ]
        });
    });

</script>