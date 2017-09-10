package game;

import java.awt.Color;
import java.awt.Font;
import java.awt.Graphics;
import java.awt.Rectangle;

public class player extends entity{
	private int xd,yd;
	private dodo instance;
	private Rectangle hibx;
	private int life=50;
	public player(dodo instance,int x,int y)
	{
	super(x,y);
	w=16;h=16;
	this.instance=instance;
	hibx=new Rectangle(x,y,w,h);
	
	}
	
	public void draw(Graphics g)
	{
		move();
		if((instance.getstage().isCollided(hibx)))
		{
			yd=0;
		}
		
		else
			yd=1;
		 
		g.setColor(Color.orange);
		g.fillOval(hibx.x, hibx.y, hibx.width,hibx.height);
		g.setColor(Color.pink);
		g.setFont(new Font("Century Gothic",Font.BOLD,20));
		g.drawString("life: "+life, 20, 20);
	}
	
	 
	private void move()
	{
		if((instance.getstage().isCollided(hibx)))
		{
			yd=0;
		}
		
		else
			yd=1;
		
		if(instance.getem().iscolliding(hibx))
		{
			if(life>0)
				{
				
				life--;
				hibx.x=800/2-w/2;
				hibx.y=500;
 				
				}
			else
			{
				dodo.st=dodo.state.end;
				instance.setgmovr(true);			}
		}
		
		hibx.x=(hibx.x+xd)%800;
		
		if(hibx.x< 0)
		{
			hibx.x=hibx.x+800;
		}
		hibx.y=(hibx.y+yd)%550;
		
	}
	public void	setxd(int v) { xd = v; }
	
	public void	setyd(int v) {  yd= v;}
	

}
