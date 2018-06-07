<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    public function courseData($course_name){
      $course=[
        'com_open'=>[
          'title'=>'《高效沟通》实战培训课程',
          'key'=>'高 效 沟 通',
          'subtitle'=>'人生的一堂必修课',
          'quote'=>[
            "高效沟通是工作顺利、学习进步、生活幸福的重要工具，是解决许多重要问题的第一步。",
            "近期，邓宏伟老师为神州通集团、天玺国际、都市物流、利达旺电梯、瑞捷咨询、等候科技、青青宝贝、南昌某集团等众多企业讲授了《高效沟通》实战课程，受到了企业和学员们的一致好评。",
            '根据众多学员的要求，邓老师在继续讲授《高效沟通》企业内训课程的同时，将面向社会学员，讲授《高效沟通》个人公开课。',
          ],
          'value'=>'课程价值',
          'value_list'=>[
            '让团队成员更好掌握沟通方法，提升沟通效率，',
            '有效改进公司部门与部门之间、总部与分支机构之间、上下级之间、相关员工与客户/顾客、合作伙伴之间的沟通，',
            '做到主动沟通、及时沟通、高效沟通、充分沟通，',
            '提高沟通效率，创造工作佳绩。',
          ],
          'gain'=>'课程要点',
          'gain_list'=>[
            '☆ 快速提升倾听能力和复述能力',
            '☆ 迅速掌握三种重要的讲话思路',
            '☆ 现场演练高效工作汇报的方法',
            '☆ 现场掌握高效会议发言的公式',
            '☆ 现场学会应用赞美的多种方法',
          ],
          'time'=>' 6月9日(周六)上午9:00—9:30签到，9:30—17:30上课',
          'address'=>' 深圳市南山区登良路62号南园综合楼五楼会议室',
          'metro'=>' 地铁11号线→南山站A出口，步行至桂庙路口站台，乘坐74路直达南园综合楼即到',
          'public_bus'=>' 公交站点：南园综合大楼、亿利达、南园村东、南油大厦、城市山林东、荔秀文化街等站点均可',
          'pay_1'=>' 本期课程免费(课程价值:1280元)',
          'pay_2'=>' 免收场地费(原场地费:88元)',
          'bonus_1'=>' 学员微信群不定时发放红包',
          'bonus_2'=>' 手气最佳者均可获赠精美礼品',
          'bonus_3'=>' 另每位学员都可获赠纪念礼物',
        ],
        'com'=>[
          'title'=>'《高效沟通》实战培训课程',
          'key'=>'高 效 沟 通',
          'subtitle'=>'人生的一堂必修课',
          'quote'=>[
            'question'=>["身为老板，您为公司上下级之间、跨部门之间、总部与分支机构之间等的",
            "沟通效率低下各种内耗不断而忧愁烦恼吗？",
            "您为员工不懂得与客户、合作伙伴等有效的沟通白白浪费了大好机会、",
            "造成各种损失而痛心疾首吗？",
            "您为开会总是议而不决、决而不行却消耗大量人力、时间、机会成本而头痛不已吗？",
            "……"],
            'answer'=>['高效沟通十分重要，',
              '与企业团队的领导力、执行力、凝聚力等',
              '都密切相关，与提升企业的',
              '客户满意度密切相关，',
              '邓宏伟老师的《高效沟通》实战内训课程',
              '能够及时有效地解除您的烦恼……'
            ]
          ],
          'object'=>'培训对象',
          'object_list'=>[
            '☆ 企业各级管理人员',
            '☆ 营销、客服、技术类人员',
            '☆ 总部办公室及分、子公司工作人员',
            '☆ 一线基层服务人员',
            '☆ 其他需要提升沟通能力的学员',
          ],
          'value'=>'课程价值',
          'value_list'=>[
            '让团队成员更好掌握沟通方法，提升沟通效率，',
            '有效改进公司部门与部门之间、总部与分支机构之间、上下级之间、',
            '相关员工与客户/顾客、合作伙伴之间的沟通，',
            '做到主动沟通、及时沟通、高效沟通、充分沟通，',
            '提高沟通效率，创造工作佳绩。',
          ],
          'gain'=>'学员收获',
          'gain_list'=>[
            '☆ 快速提升倾听能力和复述能力',
            '☆ 迅速掌握三种重要的讲话思路',
            '☆ 现场演练高效工作汇报的方法',
            '☆ 现场掌握高效会议发言的公式',
            '☆ 现场学会应用赞美的多种方法',
          ],
          'process'=>'课程大纲',
          'process_list'=>[
            '☆ 破冰——让学员们都动起来，融进来，嗨起来',
            '☆ 宣布小组分组情况，宣布PK规则和纪律要求',
            '☆ 通过课程五部曲(老师讲解方法&示范、小组演练&分享、',
	          '  小组代表PK、老师点评&总结、课间微信分享)，',
	          '  让学员们深度体验、快速掌握应用如下内容：',
            '☆ 通过统计各小组的综合得分，产生优秀小组，并给予精神奖励',
            '☆ 老师课程总结',
          ],
          'process_3_list'=>[
            '※ 职场沟通的要求、沟通方式的选择；',
            '※ 倾听的重要性、倾听的注意事项、倾听和复述能力的两个互动演练；',
            '※ 三种重要的讲话思路，并结合工作实际内容一一进行量身定制方案的演练；',
            '※ 与上级/客户工作沟通与执行的四步骤循环，',
            '	  显著提升上级的领导力和下级的执行力、客户/顾客的满意度；',
            '※ 高效工作汇报的技巧和误区，并结合企业实际进行实战演练；',
            '※ 工作汇报与执行的五大要点，让工作沟通更加高效；',
            '※ 企业会议三大通病及对策；',
            '※ 高效会议发言的万能公式，并结合企业实际进行实战演练；',
            '※ 赞美的原则、技巧、话术，并进行实战演练。'
          ],
          'feature'=>'课程特点',
          'feature_list'=>[
            '☆ 顾问式培训，个性化方案',
            '☆ 全程实战，启发式教学',
            '☆ 目标导向，价值突出',
          ],

          'feature_detail'=>[
            '提前到企业进行深入调研，结合客户的需求及需解决的员工具体沟通问题，',
            '量身定制个性化的培训方案，确保方案设计的高水准和实效性。',
            '融合情景模拟/游戏体验&小组PK，案例解析&互动分享、精要讲解&精彩点评于一体，',
            '多种方式组合运用极大地激发学员的学习热情和小组的团队精神。',
            '紧扣预定的目标，运用教练技术、演讲口才培训等卓有成效的方式，',
            '学员可以现场提升讲话思路、倾听、复述和高效进行工作汇报、会议发言的能力、赞美的能力。',
          ],
        ],
        'sun'=>[
          'title'=>'《阳光心态》深度式体验培训课程',
          'key'=>'阳光心态',
          'subtitle'=>'心态决定一切，自动自发者成功！',
          'quote'=>[
            'question'=>['身为老板，您是否遇到员工出现如下情况并且头痛不已：',
              '迷惘：方向不明，目标不定，动力不足，白白浪费大好时光',
              '浮躁：急功近利，没有耐心，今天播种恨不得今天就收获',
              '焦虑：自卑，怀疑，恐惧，无法有效发挥自身能力和潜力',
              '消极：被动，等待，抱怨，无所作为，还每天传播负能量',
              '逆商低：应对挫折能力弱，遇到困难不能坚持，轻易放弃',
              '冷漠自私：没有爱心，不懂感恩，干啥都没有热情，没有客户观念，缺乏服务精神',
              '眼高手低：自视甚高却能力不足，看什么都不顺眼，不务实，不爱学习',
              '缺乏责任心：得过且过，经常逃避、推卸责任，做一天和尚撞一天钟',
              '……'
            ],
            'answer'=>['这些都表明员工心态出现严重问题！',
              '员工心态决定了团队状态，',
              '在很大程度上影响了企业团队的领导力、执行力、凝聚力和公司业绩，',
              '邓宏伟老师《阳光心态》内训课程能够及时有效地解除您的烦恼……'
            ]
          ],
        ],

      ];
      return $course[$course_name];
    }
}
