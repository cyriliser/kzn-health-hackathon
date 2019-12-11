using Microsoft.Owin;
using Owin;

[assembly: OwinStartupAttribute(typeof(Patient_Data_Capturing.Startup))]
namespace Patient_Data_Capturing
{
    public partial class Startup {
        public void Configuration(IAppBuilder app) {
            ConfigureAuth(app);
        }
    }
}
