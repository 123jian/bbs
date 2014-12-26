/*
 ����
 parent			�����ٲ���Ԫ�ص�������Ĭ��Ϊ $("waterfall")
 container		�����ٲ����ĸ�������Ĭ��Ϊ $("threadlist")
 maxcolumn		�������У�Ĭ��Ϊ 0 ������
 space			ͼƬ��࣬Ĭ��Ϊ 10
 index			�ӵڼ��ſ�ʼ���У�Ĭ��Ϊ 0
 tag			�ٲ���Ԫ�ص� tagName��Ĭ��Ϊ li
 columnsheight	����и߶ȵ�����
 
 ����ֵ
 index			��ǰ�ٲ����Ѿ������˶��ٸ�ͼƬ
 totalwidth		��ǰ�ٲ������ܿ���
 totalheight	��ǰ�ٲ������ܸ߶�
 columnsheight	����ٲ����иߵ�����
 */
function waterfall(v) {
	var v = typeof(v) == "undefined" ? {} : v;
	var column = 1;
	var totalwidth = typeof(v.totalwidth) == "undefined" ? 0 : v.totalwidth;
	var totalheight = typeof(v.totalheight) == "undefined" ? 0 : v.totalheight;
	var parent = typeof(v.parent) == "undefined" ? $("waterfall") : v.parent;
	var container = typeof(v.container) == "undefined" ? $("threadlist") : v.container;
	var maxcolumn = typeof(v.maxcolumn) == "undefined" ? 0 : v.maxcolumn;
	var space = typeof(v.space) == "undefined" ? 12 : v.space;
	var height = typeof(v.height) == "undefined" ? 11 : v.space;
	var index = typeof(v.index) == "undefined" ? 0 : v.index;
	var tag = typeof(v.tag) == "undefined" ? "li" : v.tag;
	var columnsheight = typeof(v.columnsheight) == "undefined" ? [] : v.columnsheight;
	var mincolumn = {"value": 0, "index": 0};
	var totalelem = [];
	var singlewidth = 0;
	totalelem = parent.getElementsByTagName(tag);
	
	if(totalelem.length > 0) {
		column = Math.floor((container.offsetWidth + space) / (totalelem[0].offsetWidth + space));

		if(maxcolumn && column > maxcolumn) {
			column = maxcolumn;
		}
		if(!column) {
			column = 1;
		}
		//�������иߵ����鳤�Ⱥ�������һ�£�˵����Ҫ���¼���ÿ��Ԫ�ص�λ��
		if(columnsheight.length != column) {
			columnsheight = [];
			for(var i = 0; i < column; i++) {
				columnsheight[i] = 0;
			}
			index = 0;
		}
		
		singlewidth = totalelem[0].offsetWidth + space;
		totalwidth = singlewidth * column - space;
		
		for(var i = index, j = totalelem.length; i < j; i++) {
			mincolumn = columnsheight.waterfallMin();
			totalelem[i].style.position = "absolute";
			totalelem[i].style.left = singlewidth * mincolumn.index + "px";
			totalelem[i].style.top = mincolumn.value + "px";
			columnsheight[mincolumn.index] = columnsheight[mincolumn.index] + totalelem[i].offsetHeight + height;
			totalheight = Math.max(totalheight, columnsheight.waterfallMax());
			index++;
		}
		parent.style.height = totalheight + "px";
		parent.style.width = totalwidth + "px";
	}
	
	return {"index": index, "totalwidth": totalwidth, "totalheight": totalheight, "columnsheight" : columnsheight};
}

Array.prototype.waterfallMin = function () {
	var min = 0;
	var index = 0;
	if(this.length > 0) {
		min = Math.min.apply({}, this);
		for(var i = 0, j = this.length; i < j; i++) {
			if(this[i] == min) {
				index = i;
				break;
			}
		}
	}
	return {"value": min, "index": index};
}

Array.prototype.waterfallMax = function () {
	return Math.max.apply({}, this);
}